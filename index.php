<?php

$uri = ($_SERVER['REQUEST_URI'] == '/') ? 'index' : $_SERVER['REQUEST_URI'];

$page = $_SERVER['DOCUMENT_ROOT'] . '/views/pages/'.$uri.'.php';

if (!file_exists($page)) {
    $page = $_SERVER['DOCUMENT_ROOT'] . '/views/pages/404.php';
    
}

require_once __DIR__ . '/views/layouts/site.php';


