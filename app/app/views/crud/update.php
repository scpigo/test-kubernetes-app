<?php
/** @var integer $id */
/** @var $conn */

require __DIR__.'/./../../db.php';
?>

<?php $student = $result = pg_fetch_all(pg_query($conn, "SELECT * FROM students WHERE id = ".$id))[0]; ?>

<form action="/../../methods/update.php" method="POST">
    <label for="name_button" >имя</label>
    <input type="text" name="name" id="name_button" value="<?=$student['name']?>" required>

    <input type="hidden" name="id" id="name_button" value="<?=$id?>">

    <button type="submit" id="button-submit">отправить</button>
</form>
