<?php
    require_once("../functions.php");

    // CONSTRUCTOR // 

    class VideoGame{
        private string $videoGameName;
        private string $console;
        private float $price;

        // Le constructeur est une méthode particulière dans une classe, elle est définie avec le nom "___construct()" qui va indiquer comment la classe doit créer l'objet précis, c'est une méthode appellée "magique", on ne peut pas déclarer 2 constructeurs en PHP pour une classe.

        public function __construct(string $gameName, string $consoleName, float $p){ // Méthode "magique" avec 3 paramètres qui vont être remplacés avec les arguments fournis lors de l'instanciation de la classe
            $this->videoGameName = $gameName;
            $this->console= $consoleName;
            $this->price = $p;
        }
    }
    $game_1 = new VideoGame("Kena : Bridge of Spirits", "PS5", 40); // Instanciation d'une classe et stockage dans l'objet "$game_1" avec ses 3 arguments
    debug($game_1);
    $game_2 = new VideoGame("AfterImage", "PC", 40);
    debug($game_2);
?>