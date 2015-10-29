<?php
function stat_all($link){
    $query="SELECT*FROM statistic ORDER by id DESC";
    $result=my_sqli($link,$query);
    
    if(!result)
        die(mysqli_error($link));
    $n=mysqli_num_rows($);
    $stats=array();
    for($i=0;$i<$n;i++){
        $row=mysqli_fetch_assoc($result);
        $stat[]=$row;
    }
    return $stat
} 


?>