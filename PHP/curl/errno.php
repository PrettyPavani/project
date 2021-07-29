<?php

if(isset($_POST['username'],$_POST['age'])){
    $db = new mysqli('localhost','root','','postdata');
    $name = $_POST['username'];
    $age = $_POST['age'];
    $query = "Insert into data SET mydata =' $name , $age'";
    mysqli_query($query,$db);

}
?>