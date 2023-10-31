<?php

require 'vendor/autoload.php';

use App\Controller\ApiController;

$top = isset($_GET['top']) ? $_GET['top'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';
$language = isset($_GET['language']) ? $_GET['language'] : '';

$repositories = ApiController::searchRepositories($top, $date, $language);

$filteredRepositories = [];

foreach ($repositories as $repository) {
    $filteredRepositories[] = $repository->getAllData();
}

header('Content-Type: application/json');
echo json_encode($filteredRepositories);
