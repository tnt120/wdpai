<?php

class AppController
{

    private $request;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isGet(): bool
    {
        return $this->request === 'GET';
    }

    protected function isPost(): bool
    {
        return $this->request === 'POST';
    }

    protected function render(string $template = null, array $variables = [])
    {

        $templatePath = 'public/views/' . $template . '.php';
        $output = 'File not found';

        if (file_exists($templatePath)) {
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }

        print $output;
    }

    public function displayError($error)
    {
        $this->render('unexpectedError', ['error' => $error]);
    }

    protected function isAuthenticated(): bool
    {

        if (!isset($_COOKIE['session'])) {
            return false;
        }

        $token = $_COOKIE['session'];

        $sessionRepository = new SessionRepository();
        $session = $sessionRepository->getSession($token);

        if ($session) {
            if ($session->isNotExpired()) {
                $sessionRepository->extendSession($token);

                if (!isset($_COOKIE['short-lived-session'])) {
                    setcookie('session', $token, strtotime('+7 days'));
                }

                return true;
            }

            setcookie('session', '');
        }

        return false;
    }

    protected function getSingedUserId(): ?int
    {
        if (!isset($_COOKIE['session'])) {
            return null;
        }

        $token = $_COOKIE['session'];

        $sessionRepository = new SessionRepository();
        $session = $sessionRepository->getSession($token);

        if ($session && $session->isNotExpired()) {
            return $session->getUserId();
        }

        return null;
    }
}

?>