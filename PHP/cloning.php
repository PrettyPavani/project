<?php
    class MyClass {
        public $amount;
    }
        $value = 5;
        $obj = new MyClass();
        $obj->amount = &$value;
        $copy = clone $obj;
        $obj->amount = 6;
        print_r($copy);
?>
