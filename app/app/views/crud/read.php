<?php

$data = require_once __DIR__.'/./../../methods/read.php';

?>

<br>

<?php foreach ($data as $datum): ?>
    <span><?=$datum['id']?> : <?=$datum['name']?> <a href="/crud/update/<?=$datum['id']?>">(редактировать)</a> <a href="/crud/delete/<?=$datum['id']?>">(удалить)</a></span><br>
<?php endforeach;?>