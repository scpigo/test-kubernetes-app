<?php
/** @var $conn */

require __DIR__.'/./../db.php';

$id = $_POST['id'];
$name = $_POST['name'];

try {
    $result = pg_update($conn, 'students', ['name' => $name], ['id' => $id]);
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