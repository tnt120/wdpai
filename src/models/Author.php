<?php

class Author
{
    private int $author_id;
    private string $name;
    private string $surname;

    public function __construct($author_id, $name, $surname)
    {
        $this->author_id = $author_id;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

}

?>