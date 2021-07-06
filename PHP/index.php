<?php
$foo = 'Bob';             
$bar = &$foo;              
$bar = "My name is $bar";  #named variables only can be used for references
echo $bar;
echo $foo;                 
?>

/*
$foo = 'bob'
$bar= $(24*7) #invalid variables

*/