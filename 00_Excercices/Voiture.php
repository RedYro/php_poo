<?php
    require_once("../functions.php");

    class Voiture{
        private int $sizeTankCar; // propriété "private" pour la taille du réservoir
        private int $nbLitreGasCar; // propriété "private" pour la quantité d'essence contenue dans la voiture

        // CONSTRUCTOR //
        public function __construct(int $sizeTC, int $litreGS){
            $this->setSizeTankCar($sizeTC);
            $this->setNbLitreGasCar($litreGS);
        }
        
        // SETTER //
        public function setSizeTankCar($size){ // Méthode pour définir la taille du réservoir de la voiture
            if(is_numeric($size)){ // Si "is_numeric" 
                $this->sizeTankCar = $size; // L'objet couramment utilisé reçoit dans sa propriété la valeur définie dans l'instanciation
            }
        }
        public function setNbLitreGasCar($quantity){ // Méthode pour définir la quantité d'essence contenue dans la voiture
            if(is_numeric($quantity)){
                $this->nbLitreGasCar = $quantity; 
            }
        }
        
        // GETTER //
        public function getSizeTankCar(){ // Méthode pour récupérer la taille du réservoir de la voiture
            return $this->sizeTankCar;
        }
        public function getNbLitreGasCar(){ // Méthode pour récupérer la quantité d'essence contenue dans la voiture
            return $this->nbLitreGasCar;
        }
    }

?>