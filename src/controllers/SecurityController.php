<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';

class SecurityController extends AppController
{

    public function login()
    {

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $user = new User('artuso', 'passwd', 'Artur', 'Pajor');

        $login = $_POST['login'];
        $password = $_POST['password'];

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