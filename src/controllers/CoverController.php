<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/CoversRepository.php';

class CoverController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    private $messages = [];
    private $coversRepository;

    public function __construct()
    {
        parent::__construct();
        $this->coversRepository = new CoversRepository();
    }

    public function getCover()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->coversRepository->getCover((int) $decoded['id']));
        }
    }
}

?>