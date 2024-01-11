<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/SessionRepository.php';

class SecurityController extends AppController
{

    public function login()
    {
        $userRepository = new UserRepository();

        if ($this->isAuthenticated()) {
            if ($userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                header('Location: /dashboard');
            } else {
                header('Location: /home');
            }
        }

        if (!$this->isPost()) {
            $message = '';
            if (isset($_REQUEST["r"])) {
                if ($_REQUEST["r"] == "session_expired") {
                    $message = "Your session expired";
                }
            }
            return $this->render('login', ['messages' => [$message]]);
        }

        $login = $_POST['login'];
        $password = $_POST['password'];

        try {
            $user = $userRepository->getUser($login);
        } catch (Exception $e) {
            if ($e->getMessage() == 'Cannot find user') {
                $user = null;
            } else {
                echo 'Cauched exception with getUser method: ' . $e->getMessage();
            }
        }

        if (!$user) {
            return $this->render('login', ['messages' => ['User with this login not exist!']]);
        }

        if ($user->getLogin() !== $login) {
            return $this->render('login', ['messages' => ['User with this login not exist!']]);
        }

        $salt = $user->getSol();
        $hashedPassword = hash('sha512', $salt . $password);

        if ($user->getPassword() !== $hashedPassword) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $sesionRepository = new SessionRepository();
        $session = $sesionRepository->createSession($user->getUserId());

        if (!$session) {
            return $this->render('login', ['messages' => ['Problem with log in. Try again.']]);
        }

        $expirationDate = strtotime("+7 days");

        setcookie("session", $session->getToken(), $expirationDate);

        if ($userRepository->getUserRole($session->getUserId()) === 'admin') {
            header('Location: /dashboard');
            return;
        }

        // return $this->render('home');

        // $url = "http://$_SERVER[HTTP_HOST]";
        header('Location: /home');
    }

    public function register()
    {
        $userRepository = new UserRepository();

        if ($this->isAuthenticated()) {
            if ($userRepository->getUserRole($this->getSingedUserId()) === 'admin') {
                header('Location: /dashboard');
            } else {
                header('Location: /home');
            }
        }

        if (!$this->isPost()) {
            return $this->render('register');
        }

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['passwordConfirmation'];

        if (empty($firstName) || empty($lastName) || empty($email) || empty($login) || empty($password) || empty($passwordConfirmation)) {
            return $this->render('register', ['messages' => ['Fill all required fields']]);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->render('register', ['messages' => ['Invalid email']]);
        }

        if ($password !== $passwordConfirmation) {
            return $this->render('register', ['messages' => ['Passwords do not match']]);
        }

        $salt = bin2hex(random_bytes(16));

        $hashedPassword = hash('sha512', $salt . $password);

        try {
            if ($userRepository->isLoginExist($login)) {
                return $this->render('register', ['messages' => ['User with provided login is already exist']]);
            }

            if ($userRepository->isEmailExist($email)) {
                return $this->render('register', ['messages' => ['User with provided email is already exist']]);
            }

            $userRepository->addUser($login, $hashedPassword, $salt, $firstName, $lastName, $email);
        } catch (Exception $e) {
            return $this->render('register', ['messages' => ['Error during registration: ' . $e->getMessage()]]);
        }

        $user = $userRepository->getUser($login);

        $sesionRepository = new SessionRepository();
        $session = $sesionRepository->createSession($user->getUserId());

        if (!$session) {
            return $this->render('login', ['messages' => ['Problem with log in. Try again.']]);
        }

        $expirationDate = strtotime("+7 days");

        setcookie("session", $session->getToken(), $expirationDate);

        if ($userRepository->getUserRole($session->getUserId()) === 'admin') {
            header('Location: /dashboard');
            return;
        }


        header('Location: /home');
    }

    public function logout()
    {
        if (!isset($_COOKIE['session'])) {
            header('Location: /login');
        }

        $sessionRepository = new SessionRepository();
        $session = $sessionRepository->getSession($_COOKIE['session']);

        if ($session) {
            $sessionRepository->deleteSession($session->getToken());
        }

        setcookie("session", "", time() - 3600);
        header('Location: /login');
    }
}

?>