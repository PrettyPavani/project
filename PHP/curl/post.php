<?php
    $data = array('username' => 'admin','age' => '23');
    $string = http_build_query($data);
    $ch = curl_init('http://localhost/php/PHP/CURL/errno.php');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    $response = curl_exec($ch);
    curl_close($ch);

?>