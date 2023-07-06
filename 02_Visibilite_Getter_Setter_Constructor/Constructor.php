<?php
    class Student{
        private $firstName;

        // CONSTRUCTOR //
        public function __construct($argument){
            // "__construct" => méthode appelée automatiquemnt lors d'une instanciation de la classe via le mot clé "new"
            // Impossible de déclarer 2 "__construct" en PHP dans une même classe
            echo "<p>Instanciation, récupération de l'information suivante effectuée : ".$argument."</p>";
            $this->setFirstName($argument); // Préférable de passer par "SETTER", permet de passer par les contrôles 
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

    // ---------------------------------------------------------------- 

    $student1 = new Student("Yro"); // "__construct" appelée automatiquemnt, argument "Yro" entré après le nom de la classe qui atterit directement dans le "__construct"
    echo "<p>Prénom : ".$student1->getFirstName()."</p>";
    $student1->__construct("Hada"); // "__construct" peut tout de même être appelée comme une méthode "classique"
    //---- Plus :
    // __construct : équivalent de "init.inc.php" avec "session_start()", "connectionDB()", "autload", etc.
    // __construct() : méthode "magique" qui s'exécute automatiquement

?>