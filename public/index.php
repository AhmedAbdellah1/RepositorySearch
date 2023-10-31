<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\ApiController;

$repositories = ApiController::searchRepositories();

$languages = [];
foreach ($repositories as $languagesRepository) {
    $languages[$languagesRepository->getLanguage()] = $languagesRepository->getLanguage();
}
$languesHtml = '';
foreach ($languages as $language) {
    $languesHtml .= "<option value='$language'>$language</option>";
}

$tops = [10, 50, 100];
$topHtml = '';
foreach ($tops as $top) {
    $topHtml .= "<option value='$top'>Top $top</option>";
}

include __DIR__ . '/../view/index.html';
