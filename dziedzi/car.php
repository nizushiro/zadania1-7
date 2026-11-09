<?php
class Vehicle {
    public $brand;
    public $type;

    public function __construct($brand,$type) {
        $this->brand = $brand;
        $this->type = $type;
    }

    public function move() {
        return "a";
    }

}   
class Car extends Vehicle {
    
    public function __construct($brand,$type) {
        return parent::__construct($brand,$type);
    }
    public function move() {
    return "b";
    }
}

class Truck extends Vehicle {
    
    public function __construct($brand,$type) {
        return parent::__construct($brand,$type);
    }
    public function move() {
        return "c";
    }
}

$car = new Car("Toyota", "RWD");
echo $car->brand . "<br>"; 
echo $car->type . "<br>";
echo $car->move() . "<br><br>";

$truck = new Truck("Scania", "AWD");
echo $truck->brand . "<br>"; 
echo $truck->type . "<br>";
echo $truck->move() . "<br>";


if (is_a($car, 'Vehicle')) {
    echo "Vehicle to Car" . "<br>";
}