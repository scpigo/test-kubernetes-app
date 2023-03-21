<?php
/** @var array $config */
$config = require __DIR__.'/config.php';

$conn = pg_connect("host=".$config['DB_HOST']." port=".$config['DB_PORT']." dbname=".$config['DB_NAME']." user=".$config['DB_USER']." password=".$config['DB_PASSWORD']);

if ($conn) echo "connected to db\n";