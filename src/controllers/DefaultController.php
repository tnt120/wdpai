<?php

require_once 'AppController.php';

class DefaultController extends AppController
{

    public function login()
    {
        $this->render('login');
    }

    public function home()
    {
        $this->render('home');
    }

    public function add()
    {
        $this->render('addbookpage');
    }

    public function registration()
    {
        $this->render('register');
    }

    public function myBookFinished()
    {
        $this->render('myBookFinished');
    }

    public function myBookToRead()
    {
        $this->render('myBookToRead');
    }

    public function myBookCurrentlyReading()
    {
        $this->render('myBookCurrentlyReading');
    }
}

?>