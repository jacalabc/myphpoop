<?php
 
    echo Car::$type;
    echo Car::speed();
    /*$car=new Car;
    echo $car->$type;*/

    /*$car=new Car;
    echo $car->speed();*/

    echo Car::YEAR;
    
    class Car{
        public static $type = '裕隆';
        public const YEAR = '2022';
        public static function speed(){
            return 60;
        }
    }
?>