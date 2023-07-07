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
    echo "<p>Marque : ".$vehicule1->getMarque()."</p>";
    echo "<p>Couleur : ".$vehicule1->getCouleur()."</p>";

    // Créer un objet 'Vehicule 2' en affichant sa marque et sa couleur 
    $vehicule2 = new Vehicule;
    echo "<p>Marque : ".$vehicule2->getMarque()."</p>";
    echo "<p>Couleur : ".$vehicule2->getCouleur()."</p>";

    // Créer un objet 'Vehicule 3' en changeant sa couleur (rouge), afficher ensuite sa marque et sa couleur
    $vehicule3 = new Vehicule;
    $vehicule3->setCouleur("rouge"); // Méthode "setCouleur" avec comme argument "rouge" afin de changer la couleur  
    echo "<p>Marque : ".$vehicule3->getMarque()."</p>"; // Affiche "BMW"
    echo "<p>Couleur : ".$vehicule3->getCouleur()."</p>"; // Affiche "rouge"

?>