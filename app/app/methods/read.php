<?php
/** @var $conn */

require __DIR__.'/./../db.php';

try {
    $result = pg_query($conn, "SELECT * FROM students");
} catch (Exception $e) {
    http_response_code(500);

    $data = [
        "status" => "error",
        "message" => $e->getMessage()
    ];

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
}

return pg_fetch_all($result);
