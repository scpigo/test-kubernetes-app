<?php
/** @var $conn */

require_once __DIR__.'/./../db.php';

$result = pg_query($conn, "SELECT * FROM students");

if (!$result) {
    http_response_code(500);

    $data = [
        "status" => "error",
        "message" => "Произошла ошибка при получении данных"
    ];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
}

return pg_fetch_all($result);
