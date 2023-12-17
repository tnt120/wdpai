<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ .'/../repository/UserRepository.php';

class SecurityController extends AppController
{

    public function login()
    {

        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $login = $_POST['login'];
        $password = $_POST['password'];

        try {
            $user = $userRepository->getUser($login);
        } catch (Exception $e) {
            if ($e->getMessage() == 'Cannot find user') {
                $user = null;
            } else {
                echo 'Cauched exception with getUser method: '.$e->getMessage();
            }
        }
        

        if (!$user) {
            return $this->render('login', ['messages' => ['User with this login not exist!']]);
        }

        if ($user->getLogin() !== $login) {
            return $this->render('login', ['messages' => ['User with this login not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        // return $this->render('home');

        // $url = "http://$_SERVER[HTTP_HOST]";
        header('Location: /home');
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        var_dump($_POST);
    }
}

?>