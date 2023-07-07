<?php
    // Méthode 1 : without "__construct" // 
    class Membre_1{
        private $pseudo;
        private $mdp;
    
        // GETTER //
        public function getPseudo(){
            return $this->pseudo;
        }

        public function getMdp(){
            return $this->mdp;
        }

        // SETTER //
        public function setPseudo($pseudo){
            if(is_string($pseudo) && (strlen($pseudo) < 15 && strlen($pseudo) > 0)){
                $this->pseudo = $pseudo;
            } else{
                echo "<p>Vérifiez le pseudo</p>";
            }
        }

        public function setMdp($mdp){
            $this->mdp = $mdp;
        }
    }
    // ----------------------------------------------------------------

    echo "<h3>Méthode 1 sans \"__constructor\"</h3>";
    echo "<h4>Exemple 1 :</h4>";
    // Exemple 1 :
    $membre1 = new Membre_1(); // Instanciation de la classe
    $membre1->setPseudo("Yro"); // appel de la méthode "setPseudo()" avec un argument "Yro" afin d'initialiser une valeur dans la variable "private" -> $pseudo  
    $membre1->setMdp("Red");
    echo "<p>Pseudo : ".$membre1->getPseudo()."</p>"; // echo de l'objet avec la méthode "getPseudo()" de la classe afin d'afficher le pseudo 
    echo "<p>Mot de passe : ".$membre1->getMdp()."</p>"; // echo de l'objet avec la méthode "getMdp()" de la classe afin d'afficher le mot de passe

    echo "<h4>Exemple 2 :</h4>";
    // Exemple 2 :
    $membre2 = new Membre_1();
    $membre2->setPseudo("Hada");
    $membre2->setMdp("Blue");
    echo "<p>Pseudo : ".$membre2->getPseudo()."</p>";
    echo "<p>Mot de passe : ".$membre2->getMdp()."</p>";

    echo "<h4>Exemple 3 (avec erreur \"pseudo\" \"strlen = 0\") :</h4>";
    // Exemple 3 :
    $membre2 = new Membre_1();
    $membre2->setPseudo(""); // strlen = 0
    $membre2->setMdp("Blue");
    echo "<p>Pseudo : ".$membre2->getPseudo()."</p>";
    echo "<p>Mot de passe : ".$membre2->getMdp()."</p>";

    echo "<h4>Exemple 4 (avec erreur \"pseudo\" \"strlen > 15\") :</h4>";
    // Exemple 4 :
    $membre2 = new Membre_1();
    $membre2->setPseudo("Hadaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"); // strlen > 15
    $membre2->setMdp("Blue");
    echo "<p>Pseudo : ".$membre2->getPseudo()."</p>";
    echo "<p>Mot de passe : ".$membre2->getMdp()."</p>";

    // ----------------------------------------------------------------
    // ----------------------------------------------------------------

    // Méthode 2 : with "__construct" // 
    class Membre_2{
        private $pseudo;
        private $mdp;

        // CONSTRUCTOR //
        public function __construct(string $pseudo, string $mdp){
            $this->setPseudo($pseudo);
            $this->setMdp($mdp);
            echo "<p>Initialisation effectuée</p>";
        }
    
        // GETTER //
        public function getPseudo(){
            return $this->pseudo;
        }

        public function getMdp(){
            return $this->mdp;
        }

        // SETTER //
        public function setPseudo($pseudo){
            if(is_string($pseudo) && (strlen($pseudo) < 15 && strlen($pseudo) > 0)){
                $this->pseudo = $pseudo;
            } else{
                echo "<p>Vérifiez le pseudo</p>";
            }
        }

        public function setMdp($mdp){
            $this->mdp = $mdp;
        }
    }
    // ----------------------------------------------------------------

    echo "<h3>Méthode 2 avec \"__constructor\"</h3>";
    echo "<h4>Exemple 5 :</h4>";
    // Exemple 5 :
    $membre3 = new Membre_2("Yato","Blue");
    echo "<p>Pseudo : ".$membre3->getPseudo()."</p>";
    echo "<p>Mot de passe : ".$membre3->getMdp()."</p>";

    echo "<h4>Exemple 6 :</h4>";
    // Exemple 6 :
    $membre4 = new Membre_2("Lya","Red");
    echo "<p>Pseudo : ".$membre4->getPseudo()."</p>";
    echo "<p>Mot de passe : ".$membre4->getMdp()."</p>";

    echo "<h4>Exemple 7 (avec erreur \"pseudo\" \"strlen = 0\"):</h4>";
    // Exemple 7 :
    $membre4 = new Membre_2("","Red");
    echo "<p>Pseudo : ".$membre4->getPseudo()."</p>";
    echo "<p>Mot de passe : ".$membre4->getMdp()."</p>";

    echo "<h4>Exemple 8 (avec erreur \"pseudo\" \"strlen > 15\"):</h4>";
    // Exemple 8 :
    $membre4 = new Membre_2("Lyaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","Red");
    echo "<p>Pseudo : ".$membre4->getPseudo()."</p>";
    echo "<p>Mot de passe : ".$membre4->getMdp()."</p>";

?>