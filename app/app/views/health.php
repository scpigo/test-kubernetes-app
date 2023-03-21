<?php
http_response_code(200);

$data = ["status" => "ok"];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
