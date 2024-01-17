<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('home', 'BookController');
Routing::get('add', 'BookController');
Routing::get('details', 'BookController');
Routing::get('registration', 'DefaultController');
Routing::get('myBookFinished', 'UsersBookController');
Routing::get('myBookToRead', 'UsersBookController');
Routing::get('myBookCurrentlyReading', 'UsersBookController');
Routing::get('dashboard', 'DashboardController');

Routing::post("logout", "SecurityController");
Routing::post('login', 'SecurityController');
Routing::post('addBook', 'BookController');
Routing::post('register', 'SecurityController');

// API Endpoints

Routing::post('search', 'BookController');
Routing::post('getCover', 'CoverController');
Routing::post('getUserBook', 'UsersBookController');
Routing::post('addUserBook', 'UsersBookController');
Routing::post('removeUserBook', 'UsersBookController');

Routing::run($path);

?>