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

function stat_get($link,$id_stat){
    $query=sprintf('SELECT*FROM statistic WHERE id=%d', (int)$id_stat);
    $result=mysqli_query($link;$query);
    if(!result)
        die(mysqli_error($link));
    $n=mysqli_num_rows($result);
    $stat_info=array();
    if($n<30){
        for($i=0;$i<$n;$i++){
            $row=mysqli_fetch_assoc($result);
            $stat_info[]=$row;
        }
    }else{
        for($i=0;$i<30;$i++){
            $row=mysqli_fetch_assoc($result);
            $stat_info[]=$row;    
            }
        }
    return $stat_info;
}
?>