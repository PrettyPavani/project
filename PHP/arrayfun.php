<?php
    $cars=array("Volvo","BMW","Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo "</br>";
?>
<?php
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";
?>

<?php
    $a1=array("red","green");
    $a2=array("blue","yellow");
    print_r(array_replace($a1,$a2));
    echo "</br>";
?>

<?php
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    print_r(array_search("red",$a));
    echo "</br>";

?>

<?php
    $a=array("red","green","blue","yellow","brown");
    print_r(array_slice($a,2));
    echo "</br>";

?>


<?php
    $a1=array("red","green","blue","yellow","brown");
    $a2=array("purple","orange");
    array_splice($a1,0,2,$a2);
    print_r($a1);
    echo "</br>";

?>



<?php
    function test_odd($var){
        return($var & 1);
    }
    $a1=array(1,3,2,3,4);
    print_r(array_filter($a1,"test_odd"));
?>



<?php
    function myfunction($v){
        return($v*$v);
    }
    $a=array(1,2,3,4,5);
    print_r(array_map("myfunction",$a));
?>



<?php
    function mySample($v1,$v2){
        return $v1 . "-" . $v2;
    }
    $a=array("Dog","Cat","Horse");
    print_r(array_reduce($a,"mySample"));
?>


<?php
    $input = array("a" => "green", "red", "b" => "green", "blue", "red");
    $result = array_unique($input);
    print_r($result);
?>