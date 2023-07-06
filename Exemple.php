<?php
    class Duck{
        private $type = "colvert";
        // protected $dead = false;
        
        // GETTER //
        public function getType(){
            return $this->type;
        }

        // SETTER //
        public function setType($type){
            $this->type = $type;
        }

        public function flyAway(string $place = 'vers nul part'){
            echo "<p style=\"font-weight=bold;\">Je m'envole $place</p>";
        }
    }

    $duck = new Duck();
    echo "<p>" . $duck->getType() . "</p>"; 
    // echo $duck->type; // Pas de "$" sur type, instanciation de la class
    $duck->setType('carolin'); 
    echo "<p>" . $duck->getType() . "</p>"; 
    $duck->flyAway();

    // $hunter = new Hunter('bon');
    
    // if($hunter->hadAShotGun && $hunter->hadABullets){
    //     $hunter->shootOn($duck);
    //     $duck->isDead();
    // } else{
    //     $duck->flyAway('loin');
    // }
    
?>