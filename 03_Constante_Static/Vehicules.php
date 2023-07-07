<?php
    class Vehicule{
        
        private static $marque = 'BMW'; //appartient à la classe
        private $couleur = 'noir'; // appartient à l'objet
    
        public function setMarque($m){
            self::$marque = $m;  //propriété static (self::)
        }

        public function getMarque(){
            return self::$marque; //propriété static (self::)
        }

        public function setCouleur($c){
            $this->couleur = $c; //propriété ($this->)
        }

        public function getCouleur(){
    
            return $this->couleur; //propriété ($this->)
        }
    }
    //----------------------------------------------------------------

    // Créer un objet 'Vehicule 1' en affichant sa marque et sa couleur 
    $vehicule1 = new Vehicule;
    echo "<h3>Véhicule 1</h3>";
    echo "<p>Marque : ".$vehicule1->getMarque()."</p>";
    echo "<p>Couleur : ".$vehicule1->getCouleur()."</p>";

    // Créer un objet 'Vehicule 2' en affichant sa marque et sa couleur 
    $vehicule2 = new Vehicule;
    echo "<h3>Véhicule 2</h3>";
    echo "<p>Marque : ".$vehicule2->getMarque()."</p>";
    echo "<p>Couleur : ".$vehicule2->getCouleur()."</p>";

    // Créer un objet 'Vehicule 3' en changeant sa couleur (rouge), afficher ensuite sa marque et sa couleur
    $vehicule3 = new Vehicule;
    echo "<h3>Véhicule 3</h3>";
    $vehicule3->setCouleur("rouge"); // Méthode "setCouleur" avec comme argument "rouge" afin de changer la couleur
    echo "<p>Marque : ".$vehicule3->getMarque()."</p>"; // Affiche "BMW"
    echo "<p>Couleur : ".$vehicule3->getCouleur()."</p>"; // Affiche "rouge"

    // Créer un objet 'Vehicule 4' en changeant sa couleur (rouge), afficher ensuite sa marque et sa couleur
    $vehicule4 = new Vehicule;
    echo "<h3>Véhicule 4</h3>";
    echo "<p>Marque : ".$vehicule4->getMarque()."</p>"; // Affiche "BMW"
    echo "<p>Couleur : ".$vehicule4->getCouleur()."</p>"; // Affiche "noir"

    // Créer un objet 'Vehicule 5' en changeant sa marque (Mercedes), afficher ensuite sa marque et sa couleur
    $vehicule5 = new Vehicule;
    echo "<h3>Véhicule 5</h3>";
    $vehicule5->setMarque("Mercedes"); // Méthode "setMarque" avec comme argument "Mercedes" afin de changer la marque, modification de la classe (propriété "$marque" = "static")
    echo "<p>Marque : ".$vehicule5->getMarque()."</p>"; // Affiche "Mercedes"
    echo "<p>Couleur : ".$vehicule5->getCouleur()."</p>"; // Affiche "noir"

    // Créer un objet 'Vehicule 6' en changeant sa marque (Mercedes), afficher ensuite sa marque et sa couleur
    $vehicule6 = new Vehicule;
    echo "<h3>Véhicule 6</h3>";
    echo "<p>Marque : ".$vehicule6->getMarque()."</p>"; // Affiche "Mercedes", à noter qu'en changeant la marque précédement avec "$vehicule5" cela modifiera tous les futurs objets à créer car la propriété "$marque" est "static" 
    echo "<p>Couleur : ".$vehicule6->getCouleur()."</p>"; // Affiche "noir"

?>