<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/UsersBookRepository.php';

class UsersBookController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    private $messages = [];
    private $usersBookRepository;
    private $userId;

    public function __construct()
    {
        parent::__construct();
        $this->usersBookRepository = new UsersBookRepository();
        $this->userId = $this->getSingedUserId();
    }

    public function myBookFinished()
    {
        if ($this->isAuthenticated()) {
            $books = $this->usersBookRepository->getUserBooks($this->userId, 1);
            $this->render('myBookFinished', ['books' => $books]);
        } else {
            header('Location: /login');
        }
    }

    public function myBookToRead()
    {
        if ($this->isAuthenticated()) {
            $books = $this->usersBookRepository->getUserBooks($this->userId, 3);
            $this->render('myBookToRead', ['books' => $books]);
        } else {
            header('Location: /login');
            ;
        }
    }

    public function myBookCurrentlyReading()
    {
        if ($this->isAuthenticated()) {
            $books = $this->usersBookRepository->getUserBooks($this->userId, 2);
            $this->render('myBookCurrentlyReading', ['books' => $books]);
        } else {
            header('Location: /login');
        }
    }

    public function getUserBook()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->usersBookRepository->getUserBook($this->userId, $decoded['bookId']));
        }
    }

    public function addUserBook()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            try {
                $code = $this->usersBookRepository->getUserBook($this->userId, $decoded['bookId']);
            } catch (Exception $e) {
                echo 'Cauched exception with getUserBook method: ' . $e->getMessage();
            }

            if ($code === 204) {
                echo json_encode($this->usersBookRepository->addUserBook($this->userId, $decoded['bookId'], $decoded['typeId'], $decoded['rating']));
            } elseif ($code === 1 || $code === 2 || $code === 3) {
                echo json_encode($this->usersBookRepository->editUserBook($this->userId, $decoded['bookId'], $decoded['typeId'], $decoded['rating']));
            }
        }
    }

    public function removeUserBook()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->usersBookRepository->removeUserBook($this->userId, $decoded['bookId']));
        }
    }
}

?>