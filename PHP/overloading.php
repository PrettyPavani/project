<?php
    class Shape{
        function __call($name,$arg){
            if($name=="area"){
                switch(count($arg)){
                    case 1:return 3.14*$arg[0]*$arg[0];
                    case 2:return $arg[0]*$arg[1];
                }
            }
        }
    }

    $circle = new Shape();
    echo "Area of circle:".$circle->area(3);
    echo "</br>";
    $rectangle = new Shape();
    echo "Area of rectangle:".$rectangle->area(3,4);
?>