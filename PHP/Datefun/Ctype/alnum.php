<?php
   $strings = array('hello', 'foo!#$bar');
   
   foreach ($strings as $example) {
      if (ctype_alnum($example)) {
         echo "$example consists of all letters or digits. \n";
         echo "</br>";
      }else {
         echo "$example does not have all letters or digits. \n";
         echo "</br>";
      }
   }
?> 


<?php
$string=array("helloworld","1234raj");
foreach($string as $example){
    if(ctype_alpha($example)){
        echo "$example contains all alphabets";
        echo "</br>";
    }else{
        echo "$example doesnt contains all alphabets";
        echo "</br>";
    }
}
?>



<?php
   $strings = array('134.50', '1004', 'foo!#$bar');
   
   foreach ($strings as $test) {
      if (ctype_digit($test)) {
         echo "$test consists of all digits. \n";
         echo "</br>";
      }else {
         echo "$test does not have all digits. \n";
         echo "</br>";
      }
   }
?> 