<?php
    //output filesize
    echo filesize("basename.php");
    echo "<br />";

    $file = fopen("basename.php", "a+");
    // truncate file
    ftruncate($file,100);
    fclose($file);

    //Clear cache and check filesize again
    clearstatcache();
    echo filesize("basename.php");
?>


<?php
echo disk_total_space("C:");
?>