<?php


require_once 'dbconnect.php';



    $sql = "INSERT INTO product_table (product_name, price, size)  VALUES('new product ','1400','45')";
    $result = mysqli_query($conn, $sql);
   
    if($result){
        echo "{\"res\" : \"success\"}";
    }else{
        echo "{\"res\" : \"error\"}";
    }
    

    //json_encode($json_array);

   

    //file_put_contents('data.json', $encode_products);



?>