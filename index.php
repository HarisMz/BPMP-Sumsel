<?php
$request_uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($request_uri, PHP_URL_PATH);
$uri = rtrim($uri, '/');

if (empty($uri) || $uri == '/') {
    $page_path = 'pages/index.php';
} else {
    $uri = ltrim($uri, '/');
    $page_path = 'pages/' . $uri . '.php';
}

if (file_exists($page_path)) {
    include $page_path;
} else {
    header("HTTP/1.0 404 Not Found");
    if (file_exists('pages/404.php')) {
        include 'pages/404.php';
    } else {
        echo "Halaman tidak ditemukan";
    }
}
?>