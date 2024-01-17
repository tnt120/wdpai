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
}
