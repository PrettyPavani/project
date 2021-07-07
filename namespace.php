<?php 
    namespace Html;
    class Table{
        public $title;
        public $numRows;
        public function message(){
            echo "<p> Table {$this->title} has {$this->numRows} rows</p>";
        }
   }
        $table= new Table();
        $table->title="myTable";
        $table->numRows=5;
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            $table->message();
        ?>

    </body>
</html>