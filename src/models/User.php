<?php

class User
{
    private int $user_id;
    private string $login;
    private string $password;
    private string $name;
    private string $surname;
    private string $email;
    private string $sol;

    public function __construct(int $user_id, string $login, string $password, string $name, string $surname, string $email, string $sol)
    {
        $this->user_id = $user_id;
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->sol = $sol;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getSol(): string
    {
        return $this->sol;
    }

    public function setSol(string $sol): void
    {
        $this->sol = $sol;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}

?>