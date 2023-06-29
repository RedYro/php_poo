<?php
    require_once("../functions.php");
    /*
     * Niveaux de visibilité :
     * La visibilité représente la portée de notre propriété ou/et notre méthode, à quel moment l'on pourra y accéder et à quel moment l'on ne pourra pas
     * - "public" : visibilité utilisée par défaut quand on crée une classe, elle permet de définir que cette propiété est accessible au sein de la classe mais aussi à l'extérieur de celle-ci => accessible partout (intérieur et extérieur de la classe)
     * - "private" : accessible uniquement à l'intérieur de la classe mais pas en dehors de celle-ci, mettre les propriétés en "private" permet d'éviter qu'elles ne soient modifiées de l'extérieur de la classe sans contrôle 
     * - "protected" : plus ou moins la même visibilité que "private", en revanche celle-ci est légèrement moins stricte car on peut réutiliser la propriété avec une visibilité "protected" lorsque l'on hérite de la classe sur laquelle elle est déclarée => accessible à l'intérieur de la classe et dans la classe héritières 
     * 
     * Les propriétés sont généralement déclarées en "private"
     * Les méthodes sont déclarées en "public" sauf dans des cas particuliers
     */

    class Vehicle{
        // propriété "public"
        public string $brand;
        // propriété "private"
        private string $color;
    }

    // "public" //
    $vehicle_1 = new Vehicle();
    $vehicle_1->brand = "BMW";
    echo "<p>".$vehicle_1->brand."</p>";
    $vehicleBrand = $vehicle_1->brand = "BMW";
    echo "<p>".$vehicleBrand."</p>";

    // "private" // 
    // $vehicle_1->color = "White"; // Affiche l'erreur suivante : Fatal error: Uncaught Error: Cannot access private property Vehicle::$color in C:\xampp\htdocs\php_poo\02_Visibilite_Getter_Setter\Visibilite.php:29 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php_poo\02_Visibilite_Getter_Setter\Visibilite.php on line 29
    // echo "<p>".$vehicle_1->color."</p>";

    // "protected" //
    // TO DO


?>