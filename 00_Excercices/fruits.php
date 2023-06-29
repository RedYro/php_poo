<?php
    require_once("../functions.php");
    class Fruit{
        private string $name;
        private string $color;

        // CONSTRUCTOR //
        public function __construct(string $n, string $c){
            $this->name = $n;
            $this->color = $c;
        }
        // GETTER //
        public function getName(){
            return $this->name;
        }
        public function getColor(){
            return $this->color;
        }
    }
    $fruit_1 = new Fruit("Fraise", "rouge");
    // debug($fruit_1);
    echo "<p> Je suis une ".$fruit_1->getName()." ".$fruit_1->getColor()."</p>";
    $fruit_2 = new Fruit("Pomme", "verte");
    echo "<p> Je suis une ".$fruit_2->getName()." ".$fruit_2->getColor()."</p>";

?>