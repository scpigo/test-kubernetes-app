<?php
/** @var $conn */
/** @var integer $id */

require_once __DIR__.'/./../db.php';

$query = "DELETE FROM students WHERE id = ".$id;

$result = pg_query($conn, $query);

if (!$result) {
    http_response_code(500);

    $data = [
        "status" => "error",
        "message" => "Произошла ошибка при удалении записи"
    ];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
}

?>

<script type="text/javascript">
    window.location.href = '/';
</script>