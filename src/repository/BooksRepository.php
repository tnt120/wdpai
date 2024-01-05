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
}

?>