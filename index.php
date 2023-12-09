<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('home', 'DefaultController');
Routing::get('add', 'DefaultController');
Routing::get('registration', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('addBook', 'AddBookContoller');
Routing::post('register', 'SecurityController');

Routing::run($path);

?>