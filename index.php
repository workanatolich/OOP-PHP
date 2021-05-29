<?php

class Employee {
    public $name;
    public $age;
    public $salary;
}

$employee1 = new Employee;
$employee1->name = 'John';
$employee1->age = 20;
$employee1->salary = 1500;

$employee2 = new Employee;
$employee2->name = 'Matt';
$employee2->age = 25;
$employee2->salary = 2500;

echo $employee1->age + $employee2->age;
echo '<br>';
echo $employee1->salary + $employee2->salary;

