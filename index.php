<?php

class Employee {
    private $name;
    private $age;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        if($this->isAgeCorrect($age)) {
            $this->age = $age;
        } else {
            echo 'Неверный возраст';
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function setSalary($salary) {
        $this->salary =$salary;
    }

    public function getSalary() {
        return "$this->salary \$";
    }

    private function isAgeCorrect($age) {
        return $age > 1 && $age <= 100;
    }

}

$emp = new Employee();
$emp->setName('John');
$emp->setAge(30);
$emp->setSalary(400);

echo $emp->getSalary();
