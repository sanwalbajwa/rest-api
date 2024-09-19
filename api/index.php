<?php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$parts = explode("/", $path);
var_dump ($parts);
echo $_SERVER["REQUEST_METHOD"];


require dirname(__DIR__) . "/src/TaskController.php";

$controller = new TaskController;
$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);