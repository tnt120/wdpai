<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Book.php';

class BooksRepository extends Repository
{

    public function getBooks(): array
    { // tutaj try catch przy fetchu, mamy connect zrobic z bazy, zapytanie i zamknac baze na koniec
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
}

?>