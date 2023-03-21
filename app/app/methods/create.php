<?php
/** @var $conn */

require __DIR__.'/./../db.php';

$name = $_POST['name'];

try {
    $result = pg_insert($conn, 'students', ['name' => $name]);
} catch (Exception $e) {
    http_response_code(500);

    $data = [
        "status" => "error",
        "message" => $e->getMessage()
    ];

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
}

?>

<script type="text/javascript">
    window.location.href = '/crud/read';
</script>
