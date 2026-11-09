<?php
class Employee {
    public $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    
    public function showInfo() {
        return "$this->name, $this->salary";
    }
}

class Manager extends Employee {
    public $departament;

    public function __construct($name, $salary, $departament) {
        $this->departament = $departament;
        return parent::__construct($name, $salary);
    }


public function showInfo() {
    return parent::showInfo() . ",$this->departament";
}
}
$manager = new Manager("bob", 67, "IT");
echo $manager->showInfo() . "<br>"; 



?>