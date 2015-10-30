<?php
$zt1=$_GET['zt1'];
$zt2=$_GET['zt2'];
$lastUpdateHour;
$current_time=getDate();
if($current_time[hour]!=$lastUpdateHour){
    
    $lastUpdateHour=$currentTime[hour];
    
    $result=mysqli_query($link, $query);
    
    $query = "INSERT INTO statistic (name, location, value, time) VALUES ('%d','%d','%d','%d')";
}




?>
