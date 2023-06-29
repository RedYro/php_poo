<?php
    require_once("../functions.php");
    // GETTER & SETTER

    class Human{
        private string $firstName;
        private string $lastName;
        /*
         * Les propiétés étant "private", il est impossible de passer par des méthodes "public" pour pouvoir lire et écrire ces propriétes
         * On parle de "GETTER" (lire / récupérer) et de "SETTER" (écrire / définir) : méthodes qui permettront de faire la médiation (intermédiaire) entre l'extérieur de la classe et les propriétés à l'intérieur de celle-ci 
        */

        // SETTER //
        // Par convention, on appel la méthode avec le mot clé "set" 
        public function setFirstName($firstN){ // Méthode "public" => utilisation possible à l'extérieur de la classe
            // Vérification à faire toujours dans "SETTER"
            if(is_string($firstN)){
                $this->firstName = $firstN; // $this => pseudo-variable, va être remplacée par l'objet couramment utilisé 
                // $this est créée automatiquement et réprésente l'instance courante
                // propriété "firstName" de l'objet couramment utilisé prendra la valeur de l'argument "$firstN" 
            }
        }
        // SETTER //
        public function setLastName($lastN){ 
            if(is_string($lastN)){
                $this->lastName = $lastN; 
            }
        }

        // GETTER // 
        // Par convention, on appel la méthode avec le mot clé "get" 
        public function getFirstName(){ // Méthode "public" => permet de récupérer le prénom à l'extérieur de la classe
            return $this->firstName; // Retourne la valeur du prénom dans la propriété de l'objet couramment utilisé
        }
        // GETTER // 
        public function getLastName(){ 
            return $this->lastName; 
        }
    }

    $employee_1 = new Human(); // Instanciation de la classe => création d'un objet à partir d'une classe
    // $employee_1->firstName = "Yro"; // Propriété privée => impossible d'y accéder
    $employee_1->setFirstName("Yro"); // Stockage de la valeur "Yro" dans la propriété "$firstName" grâce à la méthode "setFirstName()" de l'objet couramment utilisé (ici "$employee_1")
    // $yro = $employee_1->setFirstName("Yro");
    // echo "<p>".$yro."</p>"; // => impossible d'utilisation sans "get"
    $employee_1->setLastName("Red");
    echo "<p>".$employee_1->getFirstName()."</p>"; // Affiche "Yro"
    echo "<p>".$employee_1->getLastName()."</p>"; // Affiche "Red"
    echo "<p>".$employee_1->getLastName()." ".$employee_1->getFirstName()."</p>"; // Affiche "Red Yro"

?>