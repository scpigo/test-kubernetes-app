<?php
/** @var $conn */

require_once __DIR__.'/./../db.php';

$name = $_POST['name'];

$query = "INSERT INTO students (name) VALUES ('".$name."')";

$result = pg_query($conn, $query);

if (!$result) {
    http_response_code(500);

    $data = [
        "status" => "error",
        "message" => "Произошла ошибка при создании записи"
    ];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
}

?>

<script type="text/javascript">
    window.location.href = '/';
</script>
