<?php    
    $databaseHost = 'localhost';
    $databaseName = 'crud';
    $databaseUsername = 'root';
    $databasePassword = 'password';    
    $mysqli = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
    if(!$mysqli){
        die(mysqli_error($mysqli));
    }  
?>