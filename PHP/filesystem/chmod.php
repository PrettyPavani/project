<?php
    chmod("basename.php",0600);
    chmod("basename.php",0644);
    chmod("basename.php",0755);
    chmod("basename.php",0740);


/*
The first number is always zero
The second number specifies permissions for the owner
The third number specifies permissions for the owner's user group
The fourth number specifies permissions for everybody else
Possible values (to set multiple permissions, add up the following numbers):

1 = execute permissions
2 = write permissions
4 = read permissions
*/

?>