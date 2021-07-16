<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from crud where id=$id";
    $result=$mysqli->query($sql);
    if($result){
        //echo "deleted successfuly";
        header('location:display.php');
    }else{
        die(mysqli_error($mysqli));
    }
}
?>