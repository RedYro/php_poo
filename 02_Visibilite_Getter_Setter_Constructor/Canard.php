<?php
    class Duck{
        private $type = "colvert";
        protected $dead;

        // CONSTRUCTOR
        public function __construct($dead = false){
            $this->dead = $dead;
            echo "<p>Un nouveau canard est sorti de son oeuf</p>";
        }
        
        // GETTER //
        public function getType(){
            return $this->type;
        }

        // SETTER //
        public function setType($type){
            $this->type = $type;
        }

        public function flyAway(string $place = 'vers nul part'){
            echo "<p>Le canard s'envole $place</p>";
        }
    }

    $duck = new Duck(); // Instanciation de la classe, création d'un objet
    $duck2 = new Duck();
    // echo "<p>" . $duck->getType() . "</p>"; 
    // echo $duck->type; // Pas de "$" sur type
    // $duck->setType('carolin'); 
    // echo "<p>" . $duck->getType() . "</p>"; 
    // $duck->flyAway('loin');

    // $hunter = new Hunter('bon');
    
    // if($hunter->hadAShotGun && $hunter->hadABullets){
    //     $hunter->shootOn($duck);
    //     $duck->isDead();
    // } else{
    //     $duck->flyAway('loin');
    // }

?>