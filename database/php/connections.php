#!/usr/bin/php
<?php

    function connection(){
        $hostname = "25.12.72.10"; 		
        $username = "test1";   
        $project  = "IT490";  
        $password = "password";  
        
        $connection = mysqli_connect($hostname, $username, $password, $project);
        
        if (!$connection){
            echo "Error Connecting to Database: " . $connection->connect_errno.PHP_EOL;
            exit();
        }
        
        echo "Connection Established to Database" . PHP_EOL;
        return $connection;
    }

connection(); //call the function

?>
