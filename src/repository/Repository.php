<?php
require_once __DIR__.'/../../Database.php';

class Repository {
    private static $instance = null;
    protected $database;

    public function __construct() {
        $this->database = new Database();
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

?>