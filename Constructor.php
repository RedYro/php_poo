<?php
    class Student{
        private $firstName;

        // CONSTRUCTOR //
        public function __construct($argument){
            echo "<p>Instanciation, récupération de l'information suivante effectuée : ".$argument."</p>";
            $this->setFirstName($argument);
        }

        // GETTER //
        public function getFirstName(){
            return $this->firstName;
        }

        // SETTER //
        public function setFirstName(string $argument){
            $this->firstName = $argument;
        }
    }

    $student1 = new Student("Yro");
    echo "<p>Prénom : ".$student1->getFirstName()."</p>";

?>