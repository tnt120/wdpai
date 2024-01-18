<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/BooksRepository.php';
require_once __DIR__ . '/../repository/AuthorsRepository.php';
require_once __DIR__ . '/../repository/GenresRepository.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/CoversRepository.php';
require_once __DIR__ . '/../models/Book.php';

class BookController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpg', 'image/jpeg'];
    const UPLOAD_DIRECTIORY = '/../public/covers/';
    private $messages = [];
    private $booksRepository;
    private $authorsRepository;
    private $genresRepository;
    private $userRepository;
    private $coverRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->booksRepository = new BooksRepository();
        $this->authorsRepository = new AuthorsRepository();
        $this->genresRepository = new GenresRepository();
        $this->coverRepository = new CoversRepository();
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

    public function edit()
    {
        if ($this->isAuthenticated() && isset($_GET['book'])) {
            if ($this->userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                try {
                    $book = $this->booksRepository->getBook((int) $_GET['book']);
                    $authors = $this->authorsRepository->getAuthors();
                    $genres = $this->genresRepository->getGenres();
                    $this->render('editBookPage', ['authors' => $authors, 'genres' => $genres, 'book' => $book]);
                } catch (Exception $e) {
                    $this->render('unexpectedError', ['error' => $e]);
                }
            } else {
                header('Location: /home');
            }
        } else {
            header('Location: /login');
        }
    }

    public function details()
    {
        if ($this->isAuthenticated() && isset($_GET['book'])) {
            try {
                $book = $this->booksRepository->getBook((int) $_GET['book']);
                $this->render('bookDetails', ['book' => $book]);
            } catch (Exception $e) {
                $this->render('unexpectedError', ['error' => $e]);
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

            $isAdded = false;

            $booksTitle = $this->booksRepository->getBooksBySearchQueries($_POST['title'], "", "");
            $authors = $this->authorsRepository->getAuthors();
            $genres = $this->genresRepository->getGenres();

            if (!empty($booksTitle)) {
                $this->render('addBookPage', ['messages' => ['Adding the book failed! Book with this title already exists!'], 'authors' => $authors, 'genres' => $genres]);
                return;
            }

            try {
                $isAdded = $this->booksRepository->createBook($_POST['title'], $_POST['author'], $_POST['genre'], $_FILES['file']['name'], $_POST['description']);
            } catch (Exception $e) {
                $this->render('addBookPage', ['messages' => ['Cannot add book: ' . $e], 'authors' => $authors, 'genres' => $genres]);
                return;
            }

            if ($isAdded) {
                return $this->render('addBookPage', ['messages' => ['Book was added succesfully!'], 'authors' => $authors, 'genres' => $genres]);
            } else {
                return $this->render('addBookPage', ['messages' => ['Adding the book failed!'], 'authors' => $authors, 'genres' => $genres]);
            }
        }
        echo dirname(__DIR__) . self::UPLOAD_DIRECTIORY . $_FILES['file']['name'];
        $this->render('addBookPage', ['messages' => $this->messages]);
    }

    public function editBook()
    {
        try {
            $author = $_POST['author'];
            $genre = $_POST['genre'];
            $description = $_POST['description'];
            $coverUrl = $_FILES['file']['name'];
            $book_id = $_POST['book_id'];

                $book = $this->booksRepository->getBook($book_id);
                $authors = $this->authorsRepository->getAuthors();
                $genres = $this->genresRepository->getGenres();

            

            if ($author === "none") {
                $author = $this->authorsRepository->getAuthorByName($book->getAuthor());
            }

            if ($genre === "none") {
                $genre = $this->genresRepository->getGenreByName($book->getGenre());
            }

            if (empty($description)) {
                $description = $book->getDescription();
            }

            if (is_uploaded_file($_FILES['file']['tmp_name']) || $this->validate($_FILES['file'])) {
                unlink(__DIR__ . '/../../public/covers/' . $book->getCoverImg());
                move_uploaded_file(
                    $_FILES['file']['tmp_name'],
                    dirname(__DIR__) . self::UPLOAD_DIRECTIORY . $_FILES['file']['name']
                );
            } else {
                $coverUrl = $book->getCoverImg();
            }

            $coverId = $this->coverRepository->getCoverId($book->getCoverImg());
        } catch (Exception $e) {
            $this->render('unexpectedError', ['error' => $e]);
        }
        try {
            $result = $this->booksRepository->updateBook($book_id, $author, $genre, $description, $coverUrl, $coverId);

            if ($result) {
                $books = $this->booksRepository->getBooks();
                $this->render('dashboard', ['books' => $books, 'authors' => $authors, 'genres' => $genres]);
            } else {
                return $this->render('editBookPage', ['messages' => ['Editing the book failed!'], 'authors' => $authors, 'genres' => $genres]);
            }
        } catch (PDOException $e) {
            return $this->render('editBookPage', ['messages' => ['Editing the book failed!'], 'authors' => $authors, 'genres' => $genres]);
        }
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
            var_dump($file['type']);
            return false;
        }

        return true;
    }
}

