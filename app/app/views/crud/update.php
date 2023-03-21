<?php /** @var integer $id */ ?>

<form action="/../../methods/create.php" method="POST">
    <label for="name_button" >имя</label>
    <input type="text" name="name" id="name_button" required>

    <input type="hidden" name="name" id="name_button" value="<?=$id?>">

    <button type="submit" id="button-submit">отправить</button>
</form>
