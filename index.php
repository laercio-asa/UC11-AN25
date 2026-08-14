<?php


require_once __DIR__ . '/config/parametros.php';

$routes = require __DIR__ . '/config/routes.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$url = str_replace(BASE_PATH, '', $url);

$url = '/' . trim($url, '/');

if ($url === '//') {
    $url = '/';
}

if (isset($routes[$url])) {

    require __DIR__ . '/' . $routes[$url];

    exit;
}


http_response_code(404);

require __DIR__ . '/pages/errors/404.php';

exit;
