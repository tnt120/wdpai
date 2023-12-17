<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Book.php';

class BooksRepository extends Repository {

    public function getBooks(): array { // tutaj try catch przy fetchu, mamy connect zrobic z bazy, zapytanie i zamknac baze na koniec
        $result = [];

        return $result;
    }
}

?>