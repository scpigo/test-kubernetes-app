<?php
http_response_code(404);

$data = ["status" => "error"];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);