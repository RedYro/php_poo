<?php
    class Membre{
        public $id = 10;
        public $pseudo;
        public $mdp;

        public function __construct(){
            echo "<p>Internaute</p>";
        }

        public function inscription(){
            return "<p>Inscription réussi !</p>"; 
        }

        public function connection(){
            return "<p>Connexion réussi !</p>"; 
        }
    }

    //----------------------------------------------------------------

    class Admin extends Membre{ // "extends" => héritage, comme "include", ici on a un copier/coller du code contenu dans la classe "Membre"
        public function accessBackOffice(){
            return "<p>Accès Back-Office</p>";
        }
    }

    //----------------------------------------------------------------

?>