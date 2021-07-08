<?php
    $str=addcslashes("My name is John","J");
    echo "$str";
    echo "</br>";
?>

<?php
    $str = addslashes('My name is "John" Daniel');
    echo($str);
    echo "</br>";
?>

<?php 
    $str = bin2hex("Hello World!");
    echo($str); 
    echo "</br>";
?>
