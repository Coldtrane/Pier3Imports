<?php

    $db_host = "127.0.0.1";
    $db_username = "root";
    $db_password = ""; 
    $db_name = "DB_Term_Project";

    //This creates the $db object which accesses the database, it will be used for different methods
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    //mysqli_connect() can then get query()

    //checks if errors exist
    if(mysqli_connect_errno()) {
        echo 'DB connection failed with the following errors: ' . mysqli_connect_error();
        die();// this kills the page
    }
    
    //Here i'm defining a constant which is the root of the project
    define('BASEURL', '/php_e_commerce/');

?>