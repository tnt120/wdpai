<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/BooksRepository.php';
require_once __DIR__ . '/../repository/AuthorsRepository.php';
require_once __DIR__ . '/../repository/GenresRepository.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../models/Book.php';

class BookController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg'];
    const UPLOAD_DIRECTIORY = '/../public/covers/';
    private $messages = [];
    private $booksRepository;
    private $authorsRepository;
    private $genresRepository;
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->booksRepository = new BooksRepository();
        $this->authorsRepository = new AuthorsRepository();
        $this->genresRepository = new GenresRepository();
    }

    public function home()
    {
        if ($this->isAuthenticated()) {
            $books = $this->booksRepository->getBooks();
            $authors = $this->authorsRepository->getAuthors();
            $genres = $this->genresRepository->getGenres();
            $this->render('home', ['books' => $books, 'authors' => $authors, 'genres' => $genres]);
        } else {
            header('Location: /login');
        }
    }

    public function add()
    {
        if ($this->isAuthenticated()) {
            if ($this->userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                $authors = $this->authorsRepository->getAuthors();
                $genres = $this->genresRepository->getGenres();
                $this->render('addbookpage', ['authors' => $authors, 'genres' => $genres]);
            } else {
                header('Location: /home');
            }
        } else {
            header('Location: /login');
        }
    }

    public function addBook()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__) . self::UPLOAD_DIRECTIORY . $_FILES['file']['name']
            );

            //$book = new Book($_POST['title'], $_POST['genre'], $_POST['author'], $_POST['description'], 0, $_FILES['file']['name']);

            return $this->render('home', ['messages' => $this->messages, /*'book' => $book*/]);
        }
        echo dirname(__DIR__) . self::UPLOAD_DIRECTIORY . $_FILES['file']['name'];
        $this->render('addBookPage', ['messages' => $this->messages]);
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->booksRepository->getBooksBySearchQueries($decoded['title'], $decoded['author'], $decoded['genre']));
        }
    }

    private function validate(array $file): bool
    {

        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[] = 'Cover image is too large for destination file system';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->messages[] = 'This file type is not supported';
            return false;
        }

        return true;
    }
}

?>