<?php

class Genre
{
    private int $genre_id;
    private string $name;

    public function __construct($genre_id, $name, )
    {
        $this->genre_id = $genre_id;
        $this->name = $name;
    }

    public function getGenreId(): int
    {
        return $this->genre_id;
    }

    public function getName(): string
    {
        return $this->name;
    }

}

?>