<?php
/** @var $conn */

require_once __DIR__.'/./../db.php';

$id = $_POST['id'];
$name = $_POST['name'];

$query = "UPDATE students SET name = ".$name." WHERE id = ".$id;

$result = pg_query($conn, $query);

if (!$result) {
    http_response_code(500);

    $data = [
        "status" => "error",
        "message" => "Произошла ошибка при обновлении записи"
    ];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
}

?>

<script type="text/javascript">
    window.location.href = '/';
</script>