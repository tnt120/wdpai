<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $login): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT login, password, name, surname, email, sol FROM "Users" NATURAL JOIN "UserDetails" where login = :login
        ');
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            throw new Exception('Cannot find user');
        }

        return new User(
            $user['login'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['email'],
            $user['sol'],
        );
    }

    public function addUser(string $login, string $password, string $sol, string $name, string $surname, string $email): void
    {

        try {
            $connection = $this->database->connect();

            $connection->beginTransaction();

            $stmt = $connection->prepare('
                INSERT INTO "Users" (login, password, sol, role_id)
                VALUES (?, ?, ?, ?)
            ');

            $stmt->execute([
                $login,
                $password,
                $sol,
                2
            ]);

            $id = $connection->lastInsertId();

            $stmt = $connection->prepare('
                INSERT INTO "UserDetails" (name, surname, email, user_id)
                VALUES (?, ?, ?, ?)
            ');

            $stmt->execute([
                $name,
                $surname,
                $email,
                $id
            ]);

            $connection->commit();
        } catch (Exception $e) {
            $connection->rollback();
            throw $e;
        }
    }

    public function isLoginExist(string $login): bool
    {
        $stmt = $this->database->connect()->prepare('SELECT * FROM "Users" WHERE login = :login');
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch() !== false;
    }

    public function isEmailExist($email): bool
    {
        $stmt = $this->database->connect()->prepare('SELECT * FROM "UserDetails"WHERE email = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch() !== false;
    }
}

?>