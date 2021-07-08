<?php
    $filename = 'C:/Users/pavani.rajagopal/PHP/fileexists.php';
    if (file_exists($filename)){
        echo "The file $filename exists";
    } else {
        echo "The file $filename does not exist";
    }
?>


<?php   
    echo "<h3>Example for __FILE__</h3>";    
    echo __FILE__ . "<br><br>";  
?>  