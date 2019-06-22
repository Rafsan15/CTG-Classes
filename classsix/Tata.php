<?php
    include 'Car.php';
    class Tata extends Car{
        public $brand = "Kore Kha";
        public function universalCar(){
            echo "Tata is sold in Gujrat";
        }
        
         public function engine(){
        echo "string";
    }
        
         public function whell(){
        echo "string";
    }
    }
?>