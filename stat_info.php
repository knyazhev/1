<?php
require_once('database.php');
require_once('models/statistic.php');

$link=db_connect();
$stat_info=stat_get($link, $_GET['id']);

include('views/stat_info.php');

?>