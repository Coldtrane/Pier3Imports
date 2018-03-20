<?php
    // Example
    
    //Connect to DB
    $db_host = "127.0.0.1";
    $db_username = "gabegabe";
    $db_password = ""; 
    $db_name = "eCommerce";
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    //SQL Query
    $sql = "SELECT * FROM categories WHERE parent = 0";

    //query() is a method of the $db object
    $pquery = $db->query($sql);

    


?>