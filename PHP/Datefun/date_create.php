<?php
    $date= date_create("2012-03-03");
    echo date_format($date,"Y/m/d");
    echo "</br>";
?>


<?php
    $date1=date_create("2013-03-15");
    $date2=date_create("2013-12-12");
    print_r ($diff=date_diff($date1,$date2));
?>