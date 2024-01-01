<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Session.php';

class SessionRepository extends Repository
{

    public function getSession(string $token): ?Session
    {
        $stmt = $this->database->connect()->prepare('SELECT * FROM "Sessions" WHERE token = :token');
        $stmt->bindParam(":token", $token, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result === false) {
            return null;
        }

        return new Session($token, $result["userId"], $result["expirationTime"]);
    }

    public function createSession(int $userId): ?Session
    {
        $stmt = $this->database->connect()->prepare('INSERT INTO "Sessions" ("token", "userId", "expirationTime") VALUES (?, ?, ?)');

        $token = bin2hex(random_bytes(16));
        $expirationTime = new DateTime();
        $expirationTime->add(new DateInterval("P7D"));

        $stmt->execute([
            $token,
            $userId,
            $expirationTime->format($expirationTime::ATOM)
        ]);

        return $this->getSession($token);
    }

    public function deleteSession(string $token): void
    {
        $stmt = $this->database->connect()->prepare('DELETE FROM "Sessions" WHERE token = :token');

        $stmt->bindParam(":token", $token, PDO::PARAM_STR);

        $stmt->execute();
    }

    public function extendSession(string $token): void
    {
        $stmt = $this->database->connect()->prepare('UPDATE "Sessions" SET "expirationTime" = :date WHERE token = :token');

        $expirationTime = new DateTime();
        $expirationTime->add(new DateInterval("P7D"));
        $expirationTime = $expirationTime->format($expirationTime::ATOM);

        $stmt->bindParam(":date", $expirationTime);
        $stmt->bindParam(":token", $token, PDO::PARAM_STR);

        $stmt->execute();
    }

}

?>