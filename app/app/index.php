<?php

$config = require_once __DIR__.'/config.php';
$request = $_SERVER['REQUEST_URI'];

if ($request === "/") {
    require __DIR__ . '/views/main.php';
    return;
}
if ($request === "") {
    require __DIR__ . '/views/main.php';
    return;
}
if ($request === "/health") {
    require __DIR__ . '/views/health.php';
    return;
}
if ($request === "/crud/read") {
    require __DIR__ . '/views/crud/read.php';
    return;
}
if ($request === "/crud/create") {
    require __DIR__ . '/views/crud/create.php';
    return;
}
if (substr($request, 0, 12) === "/crud/update") {
    $id = substr($request, 13);
    require __DIR__ . '/views/crud/update.php';
    return;
}
if (substr($request, 0, 12) === "/crud/delete") {
    $id = substr($request, 13);
    require __DIR__ . '/methods/delete.php';
    return;
}

require __DIR__ . '/views/404.php';