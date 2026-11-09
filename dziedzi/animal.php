<?php
class Animal {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }


    public function eat() {
        return "animal eating😋";
    }

    public function die() {
        return "animal died☠️";
    }
}

class Cat extends Animal {
    
    public function __construct($name,$age) {
        return parent::__construct($name,$age);
    }
    public function eat() {
        return "😋";
    }
}

class Dog extends Animal {
    public function __construct($name,$age) {
        return parent::__construct($name,$age);
    }
    public function eat() {
        return "eat";
    }
}
$cat = new Cat("bobik111", 6);
echo $cat->name . "<br>";
echo $cat->age;
echo $cat->eat() . "<br>";
echo $cat->die() . "<br><br>";

$dog = new Dog("bobik22", 7);
echo $dog->name . "<br>"; 
echo $dog->age . "<br>";
echo $dog->eat() . "<br>";
echo $dog->die() . "<br>";