<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/BooksRepository.php';

class CoverController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    private $messages = [];
    private $booksRepository;

    public function __construct()
    {
        parent::__construct();
        $this->booksRepository = new BooksRepository();
    }

    public function getCover()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            $book = $this->booksRepository->getBook($decoded['id']);

            echo json_encode($book->getCoverImg());
        }
    }
}
