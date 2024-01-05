<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Genre.php';

class GenresRepository extends Repository
{

    public function getGenres(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('SELECT * FROM "Genres"');
        $stmt->execute();
        $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($genres as $genre) {
            $result[] = new Genre(
                $genre['genre_id'],
                $genre['name'],

            );
        }

        return $result;
    }
}

?>