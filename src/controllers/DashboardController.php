<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/BooksRepository.php';
require_once __DIR__ . '/../repository/AuthorsRepository.php';
require_once __DIR__ . '/../repository/GenresRepository.php';

class DashboardController extends AppController
{

    private $userRepository;
    private $booksRepository;
    private $authorsRepository;
    private $genresRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->booksRepository = new BooksRepository();
        $this->authorsRepository = new AuthorsRepository();
        $this->genresRepository = new GenresRepository();
    }

    public function dashboard()
    {
        if ($this->isAuthenticated()) {
            if ($this->userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                $books = $this->booksRepository->getBooks();
                $authors = $this->authorsRepository->getAuthors();
                $genres = $this->genresRepository->getGenres();
                $this->render('dashboard', ['books' => $books, 'authors' => $authors, 'genres' => $genres]);
            } else {
                header('Location: /home');
            }
        } else {
            header('Location: /login');
        }
    }

    public function addAuthorsGenres()
    {
        if ($this->isAuthenticated()) {
            if ($this->userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                $authors = $this->authorsRepository->getAuthors();
                $genres = $this->genresRepository->getGenres();
                $this->render('addAuthorsGenres', ['authors' => $authors, 'genres' => $genres]);
            } else {
                header('Location: /home');
            }
        } else {
            header('Location: /login');
        }
    }

    public function removeBook()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            $result = $this->booksRepository->removeBook($decoded['bookId']);

            if ($result === 200) {
                unlink(__DIR__ . '/../../public/covers/' . $decoded['bookUrl']);
            }

            echo json_encode($result);
        }
    }

    public function removeAuthor()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            $isAuthorBooks = $this->authorsRepository->isAuthorBooks($decoded['authorId']);

            if ($isAuthorBooks) {
                echo json_encode(500);
                return;
            }
            $result = $this->authorsRepository->removeAuthor($decoded['authorId']);

            if ($result === 200) {
                unlink(__DIR__ . '/../../public/covers/' . $decoded['bookUrl']);
            }

            echo json_encode($result);
        }
    }

    public function removeGenre()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            // $result = $this->booksRepository->removeAuthor($decoded['bookId']);
            // $isGenreBooks = $this->authorsRepository->isAuthorBooks($decoded['genreId']);
            $isGenreBooks = $this->genresRepository->isGenreBooks($decoded['genreId']);

            if ($isGenreBooks) {
                echo json_encode(500);
                return;
            }
            // $result = $this->authorsRepository->removeAuthor($decoded['genreId']);
            $result = $this->genresRepository->removeGenre($decoded['genreId']);

            if ($result === 200) {
                unlink(__DIR__ . '/../../public/covers/' . $decoded['bookUrl']);
            }

            echo json_encode($result);
        }
    }

    public function addAuthor()
    {
        $authors = $this->authorsRepository->getAuthors();
        $genres = $this->genresRepository->getGenres();
        if ($this->isPost()) {

            $name = $_POST['authorName'];
            $surname = $_POST['authorSurame'];

            $fullName = $name . ' ' . $surname;

            $author = $this->authorsRepository->getAuthorByName($fullName);

            if ($author !== 0) {
                $this->render('addAuthorsGenres', ['messagesAuthor' => ['Author with this name and surname currenty exist'], 'authors' => $authors, 'genres' => $genres]);
                return;
            }

            $result = $this->authorsRepository->addAuthor($name, $surname);

            if ($result) {
                $this->render('addAuthorsGenres', ['messagesAuthor' => ['Successfully added author', 'authors'], 'authors' => $authors, 'genres' => $genres]);
                return;
            }

            $this->render('addAuthorsGenres', ['messagesAuthor' => ['Cannot add author'], 'authors' => $authors, 'genres' => $genres]);
        } else {
            $this->render('addAuthorsGenres', ['authors' => $authors, 'genres' => $genres]);
        }
    }

    public function addGenre()
    {
        $authors = $this->authorsRepository->getAuthors();
        $genres = $this->genresRepository->getGenres();
        if ($this->isPost()) {

            $name = $_POST['genre'];

            $genre = $this->genresRepository->getGenreByName($name);

            if ($genre !== 0) {
                $this->render('addAuthorsGenres', ['messagesGenre' => ['This genre currenty exist'], 'authors' => $authors, 'genres' => $genres]);
                return;
            }

            $result = $this->genresRepository->addGenre($name);

            if ($result) {
                $this->render('addAuthorsGenres', ['messagesGenre' => ['Successfully added genre'], 'authors' => $authors, 'genres' => $genres]);
                return;
            }

            $this->render('addAuthorsGenres', ['messagesGenre' => ['Cannot add genre'], 'authors' => $authors, 'genres' => $genres]);
        } else {
            $this->render('addAuthorsGenres', ['authors' => $authors, 'genres' => $genres]);
        }
    }
}
