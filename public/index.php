<?php
include "../components/Router.php";
$queryBuilder = include "../components/start.php";

$router = new Router();
$path = $router->findRoute($_SERVER['REQUEST_URI']);

if ($path) {
    include __DIR__ . "/../head/head.php";
    include __DIR__ . "/../" . $path;
    exit();
} else {
    include __DIR__ . "/../notFound.php";
}

