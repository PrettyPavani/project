<?php
    var_dump(checkdate(12,31,-400));
    echo "<br>";
    var_dump(checkdate(2,29,2004));
    echo "<br>";
?>

<?php
    $date=date_create("2016-03-15");
    date_add($date,date_interval_create_from_date_string("40 days"));
    echo date_format($date,"Y-m-d");
    echo "<br>";
?>

<?php
    $date=date_create_from_format("j-M-Y","15-Mar-2013");
    print_r($date);
?>