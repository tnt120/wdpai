<?php

class Book
{
    private string $title;
    private string $genre;
    private string $author;
    private string $description;
    private float $rating;
    private string $cover;

    public function __construct($title, $genre, $author, $description, $rating, $cover){
        $this->title = $title;
        $this->genre = $genre;
        $this->author = $author;
        $this->description = $description;
        $this->rating = $rating;
        $this->cover = $cover;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function setGenre(string $genre) {
        $this->genre = $genre;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function setAuthor(string $author) {
        $this->author = $author;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function getRating():float {
        return $this->rating;
    }

    public function setRating(float $rating) {
        $this->rating = $rating;
    }

    public function getCover(): string {
        return $this->cover;
    }

    public function setCover(string $cover) {
        $this->cover = $cover;
    }
}

?>