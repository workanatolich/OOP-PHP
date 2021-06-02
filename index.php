<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
       $this->name = $name;
       $this->salary = $salary;
    }

}

$emp1 = new Employee('John', 200);
$emp2 = new Employee('Matt', 300);

echo $emp1->salary+$emp2->salary;