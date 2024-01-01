<?php

class Session
{
    private string $token;
    private int $userId;
    private DateTime $expirationTime;

    public function __construct(string $token, int $userId, string $expirationTime)
    {
        $this->token = $token;
        $this->userId = $userId;
        $this->expirationTime = new DateTime($expirationTime);
    }

    public function getToken()
    {
        return $this->token;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getValidationTime()
    {
        return $this->expirationTime;
    }

    public function isNotExpired()
    {
        $curr = new DateTime();

        return $curr <= $this->expirationTime;
    }
}

?>