<?php

class Employee {
    public $name;
    public $age;
    public $salary;

    public function getName() {
        return $this->name;
    }

    public function checkAge() {
        return $this->age > 18;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function doubleSalary() {
        return $this->salary *2;
    }



}

$employee1 = new Employee();
$employee1->name = 'Kira';
$employee1->age = 27;
$employee1->salary = 1500;
echo $employee1->getName() .'<br>';
echo $employee1->doubleSalary() .'<br>';

$employee2 = new Employee();
$employee2->name = 'Sarah';
$employee2->age = 24;
$employee2->salary = 1000;
echo $employee2->getName() .'<br>';
echo $employee1->getSalary() + $employee2->getSalary() .'<br>';


class User {
    public $name;
    public $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age) {
        if($age >= 18) {
            $this->age = $age;
        }
    }
}

$user = new User;
$user->name = 'Tom';
$user->age = 25;
$user->setName('Вася');
$user->setAge(30);
echo $user->name .'<br>';
echo $user->age .'<br>';

class Rectangle {
    public $width;
    public $height;

    public function getSquare() {
        return $this->height * $this->width;
    }

    public function getPerimeter() {
        return ($this->height + $this->width) * 2;
    }
}

$rectangle = new Rectangle();
$rectangle->width = 50;
$rectangle->height = 50;
echo $rectangle->getSquare() .'<br>';
echo $rectangle->getPerimeter() .'<br>';