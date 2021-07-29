<!-- <!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<form method="POST">
        <label>     cLICK HERE </label>
        <input type="submit" name="submit">
    </form> -->
<?php
// if(isset($_POST["submit"])){
    
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,'https://www.google.com/');
    curl_exec($cur);
    ?>