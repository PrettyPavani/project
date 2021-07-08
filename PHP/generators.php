<?php
function countTo3() {
    for ($i = 1; $i <= 3; $i++) {
        yield $i;
  
}
}
foreach(countTo3() as $value) {
  echo $value;
  echo "<br>";
}
?>