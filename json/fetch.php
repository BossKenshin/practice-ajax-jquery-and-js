<?php

require_once 'dbconnect.php';



    $sql = "SELECT * FROM product_table";
    $result = mysqli_query($conn, $sql);
    $json_array = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $json_array[] = $row;
   

    }
     echo json_encode($json_array);
    //json_encode($json_array);

   

    //file_put_contents('data.json', $encode_products);


?>