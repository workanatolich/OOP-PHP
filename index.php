<?php

class User {
    public $name;
    public $age;

    public function show($str) {
        echo $str .'!!!';
    }
}

$user = new User;
$user->name = 'Kira';
$user->age = 27;
$user->show('hello');
