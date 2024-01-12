<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Book.php';

class UsersBookRepository extends Repository
{

    public function getUserBooks(int $user_id, int $type_id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('SELECT b.book_id, b.title, a.name, a.surname, g.name AS genre, i.url, b.description, b.rating, ub.rating AS userRating
            FROM "Books" b
            JOIN "Authors" a ON b.author_id = a.author_id
            JOIN "Genres" g ON b.genre_id = g.genre_id
            JOIN "Images" i ON b.image_id = i.image_id
            JOIN "UserBooks" ub ON b.book_id = ub.book_id
            WHERE ub.user_id = :userId AND ub.type_id = :typeId
        ');

        $stmt->bindParam(':userId', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':typeId', $type_id, PDO::PARAM_INT);

        $stmt->execute();
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($books as $book) {
            $author = $book['name'] . ' ' . $book['surname'];
            $newBook = new Book(
                $book['book_id'],
                $book['title'],
                $author,
                $book['genre'],
                $book['url'],
                $book['description'],
                $book['rating']
            );
            $book['userrating'] !== null ? $newBook->setUserRating($book['userrating']) : '';
            $result[] = $newBook;
        }

        return $result;
    }

    public function getUserBook(int $user_id, int $book_id): ?int
    {
        $stmt = $this->database->connect()->prepare('SELECT b.book_id, b.title, a.name, a.surname, g.name AS genre, i.url, b.description, b.rating, ub.rating AS userRating, ub.type_id
        FROM "Books" b
        JOIN "Authors" a ON b.author_id = a.author_id
        JOIN "Genres" g ON b.genre_id = g.genre_id
        JOIN "Images" i ON b.image_id = i.image_id
        JOIN "UserBooks" ub ON b.book_id = ub.book_id
        WHERE ub.user_id = :userId AND ub.book_id = :bookId
    ');

        $stmt->bindParam(':userId', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':bookId', $book_id, PDO::PARAM_INT);

        $stmt->execute();
        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($book == false) {
            return 204;
        }

        return $book['type_id'];
    }

    public function addUserBook(int $user_id, int $book_id, int $type_id, float $rating): int
    {
        $stmt = $this->database->connect()->prepare('INSERT INTO "UserBooks" (type_id, user_id, book_id, rating) VALUES 
            (:type_id, :user_id, :book_id, :rating)
        ');
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':book_id', $book_id, PDO::PARAM_INT);
        $stmt->bindParam(':type_id', $type_id, PDO::PARAM_INT);
        $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return 200;
        } else {
            return 404;
        }
    }

    public function editUserBook(int $user_id, int $book_id, int $type_id, float $rating): int
    {
        try {
            if ($type_id === 1 && $rating !== null) {
                $stmt = $this->database->connect()->prepare('UPDATE "UserBooks" SET
                    type_id = :typeId, rating = :rating WHERE
                    user_id = :userId AND book_id = :bookId
                ');
                $stmt->bindParam(':rating', $rating);
            } else {
                $stmt = $this->database->connect()->prepare('UPDATE "UserBooks" SET
                    type_id = :typeId, rating = NULL WHERE
                    user_id = :userId AND book_id = :bookId
                ');
            }

            $stmt->bindParam(':userId', $user_id, PDO::PARAM_INT);
            $stmt->bindParam(':bookId', $book_id, PDO::PARAM_INT);
            $stmt->bindParam(':typeId', $type_id, PDO::PARAM_INT);

            $stmt->execute();
            return ($stmt->rowCount() > 0) ? 200 : 204;
        } catch (PDOException $e) {
            return 500;
        }
    }

    public function removeUserBook(int $user_id, int $book_id): int
    {
        $stmt = $this->database->connect()->prepare('DELETE FROM "UserBooks" WHERE 
            user_id = :userId AND book_id = :bookId'
        );
        $stmt->bindParam(':userId', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':bookId', $book_id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return ($stmt->rowCount() > 0) ? 200 : 204;
        } catch (PDOException $e) {
            return 500;
        }
    }
}

?>