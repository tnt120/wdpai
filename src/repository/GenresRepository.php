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

    public function getGenreByName(string $name): ?int
    {

        $stmt = $this->database->connect()->prepare('SELECT genre_id FROM "Genres" WHERE name = :name');
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($result)) {
            return $result['genre_id'];
        } else {
            return 0;
        }
    }

    public function addGenre(string $name): ?bool
    {

        $stmt = $this->database->connect()->prepare('INSERT INTO "Genres" (name) VALUES (?)');

        $stmt->execute([
            $name,
        ]);

        $result = $stmt->rowCount();

        return ($result > 0);
    }

    public function removeGenre(string $id): ?bool
    {
        $stmt = $this->database->connect()->prepare('DELETE FROM "Genres" WHERE genre_id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return ($stmt->rowCount() > 0) ? 200 : 204;
        } catch (PDOException $e) {
            return 500;
        }
    }

    public function isGenreBooks(string $id): ?bool
    {
        $stmt = $this->database->connect()->prepare('SELECT * FROM "Books" WHERE genre_id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return ($stmt->rowCount() > 0) ? true : false;
        } catch (PDOException $e) {
            return false;
        }
    }
}
