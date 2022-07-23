<?php

require_once 'dbconnect.php';

$sql = "DELETE FROM product_table ORDER BY id DESC LIMIT 1;";
$res = $conn->query($sql);

if($res){
    echo "{\"res\" : \"success\"}";

}
else{
    echo "{\"res\" : \"error\"}";

}








?>