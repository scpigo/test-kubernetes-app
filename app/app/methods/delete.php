<?php
/** @var $conn */
/** @var integer $id */

require __DIR__.'/./../db.php';

$query = "DELETE FROM students WHERE id = ".$id;

try {
    $result = pg_query($conn, $query);
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