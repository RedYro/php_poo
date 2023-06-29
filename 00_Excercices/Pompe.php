<?php
    require_once("../functions.php");

    class Pompe{
        private int $sizeTankPump; // propriété "private" pour la taille du réservoir
        private int $nbLitreGasPump; // propriété "private" pour la quantité d'essence contenue dans la voiture

        // CONSTRUCTOR //
        public function __construct(int $sizeTP, int $litreGSP){
            $this->setSizeTankPump($sizeTP);
            $this->setNbLitreGasPump($litreGSP);
        }

        // SETTER //
        public function setSizeTankPump($size){ // Méthode pour définir la taille du réservoir de la voiture
            if(is_numeric($size)){ // Si "is_numeric" 
                $this->sizeTankPump = $size; // L'objet couramment utilisé reçoit dans sa propriété la valeur définie dans l'instanciation
            }
        }
        public function setNbLitreGasPump($quantity){ // Méthode pour définir la quantité d'essence contenue dans la voiture
            if(is_numeric($quantity)){
                $this->nbLitreGasPump = $quantity;
            }
        }

        // GETTER //
        public function getSizeTankPump(){ // Méthode pour récupérer la taille du réservoir de la voiture
            return $this->sizeTankPump;
        }
        public function getNbLitreGasPump(){ // Méthode pour récupérer la quantité d'essence contenue dans la voiture
            return $this->nbLitreGasPump;
        }

        // Essence à délivrer // 
        public function gasDelivery(Voiture $v){
            // quantité à délivrer = taille réservoir voiture - nb de litres dans réservoir voiture
            $quantity_delivery = $v->getSizeTankCar() - $v->getNbLitreGasCar();
            // Si il n'y pas assez de carburant dans la pompe, on réctifie la quantité en lui attribuant ce qu'il reste
            if($quantity_delivery > $this->getNbLitreGasPump()){
                $quantity_delivery = $this->getNbLitreGasPump();
            }
            // 1 - Affectation de la nouvelle valeur à "nbLitreGasCar"
            $v->setNbLitreGasCar($v->getNbLitreGasCar() + $quantity_delivery);
            // 2 - Affectation de la nouvelle valeur à "nbLitreGasPump"
            $this->setNbLitreGasPump($this->getNbLitreGasPump() - $quantity_delivery);
            return "<p> Je viens de mettre " . $quantity_delivery . " litre(s) d'essence</p>";
        }
    }
?>