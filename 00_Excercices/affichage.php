<?php
    require_once("../functions.php");
    require_once("Voiture.php");
    require_once("Pompe.php");

    $car = new Voiture(50, 5);
    $pump = new Pompe(800, 45);

    // Départ 
    echo "<h5>Avant le passage à la pompe.</h5>";
    echo "<p> Il y a ". $car->getNbLitreGasCar()." litre(s) d'essence dans la voiture sur les ".$car->getSizeTankCar()." litre(s).</p>";
    echo "<p> Il y a ". $pump->getNbLitreGasPump()." litre(s) d'essence dans la pompe de ".$pump->getSizeTankPump()." litre(s).</p>";

    // Simulation du passage à la pompe 
    echo $pump->gasDelivery($car);

    // Après le passage 
    echo "<h5>Après le passage à la pompe.</h5>";
    echo "<p> Il y a maintenant ". $car->getNbLitreGasCar()." litre(s) d'essence dans la voiture sur les ".$car->getSizeTankCar()." litre(s).</p>";
    echo "<p> Il reste maintenant ". $pump->getNbLitreGasPump()." litre(s) d'essence dans la pompe de ".$pump->getSizeTankPump()." litre(s).</p>";
?>