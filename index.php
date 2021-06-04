<?php

require_once 'City.php';

$cities = [
    new City('Moscow', '11.9'),
    new City('Beijing', '21.5'),
    new City('Kiev', '2.9')
];

foreach ($cities as $city) {
    echo $city->getName() .' - ' .$city->getPopulation() .'m' .'<br>';
}
