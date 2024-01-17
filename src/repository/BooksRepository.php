<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Book.php';

class BooksRepository extends Repository
{

    public function getBooks(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('SELECT book_id, title, a.name, surname, g.name AS genre, url, description, rating FROM 
            "Books" b
            JOIN "Authors" a ON b.author_id = a.author_id
            JOIN "Genres" g ON b.genre_id = g.genre_id
            JOIN "Images" i ON b.image_id = i.image_id
        ');
        $stmt->execute();
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($books as $book) {
            $author = $book['name'] . ' ' . $book['surname'];
            $result[] = new Book(
                $book['book_id'],
                $book['title'],
                $author,
                $book['genre'],
                $book['url'],
                $book['description'],
                $book['rating']
            );
        }

        return $result;
    }

    public function getBook(int $book_id): ?Book
    {

        $stmt = $this->database->connect()->prepare('SELECT book_id, title, a.name, surname, g.name AS genre, url, description, rating FROM 
            "Books" b
            JOIN "Authors" a ON b.author_id = a.author_id
            JOIN "Genres" g ON b.genre_id = g.genre_id
            JOIN "Images" i ON b.image_id = i.image_id
            WHERE book_id = :id
        ');
        $stmt->bindParam(':id', $book_id, PDO::PARAM_INT);
        $stmt->execute();
        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($book == false) {
            throw new Exception('Cannot find book');
        }

        $author = $book['name'] . ' ' . $book['surname'];

        return new Book(
            $book['book_id'],
            $book['title'],
            $author,
            $book['genre'],
            $book['url'],
            $book['description'],
            $book['rating']
        );
    }


    public function getBooksBySearchQueries(string $title, string $author, string $genre)
    {
        $title = '%' . strtolower($title) . '%';

        $query = 'SELECT book_id, title, a.name, surname, g.name AS genre, url, description, rating FROM 
            "Books" b
            JOIN "Authors" a ON b.author_id = a.author_id
            JOIN "Genres" g ON b.genre_id = g.genre_id
            JOIN "Images" i ON b.image_id = i.image_id
            WHERE LOWER(title) LIKE :title';

        if (!empty($author)) {
            $query = $query . ' AND a.author_id = :author';
        }

        if (!empty($genre)) {
            $query = $query . ' AND g.genre_id = :genre';
        }

        $stmt = $this->database->connect()->prepare($query);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);

        if (!empty($author)) {
            $stmt->bindParam(':author', $author, PDO::PARAM_STR);
        }

        if (!empty($genre)) {
            $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
        }

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createBook(string $title, int $author, int $genre, string $coverImg, string $description): ?bool
    {

        try {

            $connection = $this->database->connect();

            $connection->beginTransaction();

            $stmt = $connection->prepare('INSERT INTO "Images" (url) VALUES (?)');

            $stmt->execute([
                $coverImg
            ]);

            $imgId = $connection->lastInsertId();

            $stmt = $connection->prepare('INSERT INTO "Books" (title, genre_id, author_id, image_id, description, rating) VALUES (?, ?, ?, ?, ?, ?)');

            $stmt->execute([
                $title,
                $genre,
                $author,
                $imgId,
                $description,
                0.0
            ]);

            $connection->commit();
            $book = $stmt->rowCount();

            return ($book === 1);

        } catch (Exception $e) {
            $connection->rollback();
            throw $e;
        }

    }

    public function removeBook(int $id): int
    {
        $stmt = $this->database->connect()->prepare('DELETE FROM "Books" WHERE book_id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return ($stmt->rowCount() > 0) ? 200 : 204;
        } catch (PDOException $e) {
            return 500;
        }
    }
}