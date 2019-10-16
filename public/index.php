<?php

require_once '../vendor/autoload.php';
use App\controller\{
    Vehicle, Bicycle, Cars, Truck
};

$bike = new Bicycle('Orange', 30, 1, 2);
var_dump($bike);
echo'<br><br>';

echo '<br> Color of the bike is ' .$bike->getColor().'<br>';

//Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo'<br><br>';

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('White',45, 1, 2);
echo '<br> Color of the bike is ' .$rockrider->getColor().'<br>';
echo $rockrider->forward();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo'<br><br>';
echo'<br><br>';

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('Black', 65, 2, 3);
echo '<br> Color of the bike is ' .$tornado->getColor().'<br>';
echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo'<br><br>';
echo'<br><br>';

echo'<br><br>';

// Instanciation d'un nouvel objet Cars
$car1 = new Cars('Grey', 4, 'Gasoline');
var_dump($car1);
echo '<br>';
var_dump(Cars::ALLOWED_ENERGIES);

echo $car1->engineStart();
echo'<br>';
$car1->setCarSPeed(10);
echo $car1->moveForward();
echo'<br>';
echo $car1->carBrake();
echo'<br>';
echo $car1->carBrake();

echo'<br><br>';

$truck1 = new Truck('in filling', 'Silver', 3, 'Diesel');
var_dump($truck1);
echo '<br><br>';
$truck1 = new Truck('full', 'Black', 6, 'Gasoline');
var_dump($truck1);
echo '<br><br>';
$truck1 = new Truck('Half', 'Grey', 2, 'Fuel');
var_dump($truck1);
echo '<br><br>';
$truck1 = new Truck('in filling', 'Blue', 1, 'Diesel');
var_dump($truck1);
echo '<br><br>';
$truck1 = new Truck('full', 'White', 8, 'Gasoline');
var_dump($truck1);
echo '<br><br>';
?>