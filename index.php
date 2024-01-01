<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('home', 'DefaultController');
Routing::get('add', 'DefaultController');
Routing::get('registration', 'DefaultController');
Routing::get('myBookFinished', 'DefaultController');
Routing::get('myBookToRead', 'DefaultController');
Routing::get('myBookCurrentlyReading', 'DefaultController');
Routing::get('dashboard', 'DefaultController');

Routing::post("logout", "SecurityController");
Routing::post('login', 'SecurityController');
Routing::post('addBook', 'AddBookContoller');
Routing::post('register', 'SecurityController');

Routing::run($path);

?>