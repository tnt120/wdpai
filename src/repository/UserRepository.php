<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository {

    public function getUser(string $login): ?User {
        $statement = $this->database->connect()->prepare('
            SELECT login, password, name, surname, email, sol FROM "Users" NATURAL JOIN "UserDetails" where login = :login
        ');
        $statement->bindParam(':login', $login, PDO::PARAM_STR);
        $statement->execute();

        $user = $statement->fetch(PDO::FETCH_ASSOC);

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
}

?>