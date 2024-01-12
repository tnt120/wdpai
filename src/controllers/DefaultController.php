<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class DefaultController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        if ($this->isAuthenticated()) {
            if ($this->userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                header('Location: /dashboard');
            } else {
                header('Location: /home');
            }
            return;
        }
        $this->render('login');
    }

    public function dashboard()
    {
        if ($this->isAuthenticated()) {
            if ($this->userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                $this->render('dashboard');
            } else {
                header('Location: /home');
            }
        } else {
            header('Location: /login');
        }
    }

    public function registration()
    {
        if ($this->isAuthenticated()) {
            if ($this->userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                header('Location: /dashboard');
            } else {
                header('Location: /home');
            }
            return;
        }
        $this->render('register');
    }
}

?>