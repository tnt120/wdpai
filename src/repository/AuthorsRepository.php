<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Author.php';

class AuthorsRepository extends Repository
{

    public function getAuthors(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('SELECT * FROM "Authors"');
        $stmt->execute();
        $authors = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($authors as $author) {
            $result[] = new Author(
                $author['author_id'],
                $author['name'],
                $author['surname']
            );
        }

        return $result;
    }
}
