<?php

class Book
{
    private int $book_id;
    private string $title;
    private string $author;
    private string $genre;
    private string $coverImg;
    private string $description;
    private float $rating;

    public function __construct($book_id, $title, $author, $genre, $coverImg, $description, $rating)
    {
        $this->book_id = $book_id;
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->coverImg = $coverImg;
        $this->description = $description;
        $this->rating = $rating;
    }

    public function getBookId(): int
    {
        return $this->book_id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre(string $genre)
    {
        $this->genre = $genre;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function setRating(float $rating)
    {
        $this->rating = $rating;
    }

    public function getCoverImg(): string
    {
        return $this->coverImg;
    }

    public function setCover(string $coverImg)
    {
        $this->coverImg = $coverImg;
    }
}

?>