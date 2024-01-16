<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Book.php';

class CoversRepository extends Repository
{

    public function getCover(int $cover_id): ?string
    {
        $stmt = $this->database->connect()->prepare('SELECT url FROM "Images" WHERE image_id = :id');
        $stmt->bindParam(':id', $cover_id, PDO::PARAM_INT);
        $stmt->execute();
        $cover = $stmt->fetch(PDO::FETCH_ASSOC);

        return $cover['url'];
    }
}