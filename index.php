<?php
require_once('database.php');
require_once('statistic.php');

$link=db_connect();
$sta=$stat_all($link);

include('stat.php')
?>