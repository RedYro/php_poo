<?php
    class Compteur{
        public static $nbInstanceClass = 0; // static = propriété de la classe, impossible d'appelée la propriété avec l'objet instancié, obligé de l'appelée avec la classe avec "self"
        public $nbInstanceObjet = 0;

        public function __construct(){
            ++self::$nbInstanceClass; // "self" référence à la classe
            ++$this->nbInstanceObjet; // "this" référence à l'objet instancié de la classe
        }
    }
    //----------------------------------------------------------------
    $C1 = new Compteur(); // $nbInstanceClass = 1 ; $nbInstanceObjet = 1
    $C2 = new Compteur(); // $nbInstanceClass = 2 ; $nbInstanceObjet = 1
    $C3 = new Compteur(); // $nbInstanceClass = 3 ; $nbInstanceObjet = 1

    echo "<p>Nombre de fois que la classe a été instancié : ".Compteur::$nbInstanceClass."</p>"; // Accès à une propriété de la classe via "Compteur::$nbInstanceClass" // Affiche 3 car la classe a produit 3 objets 
    echo "<p>Nombre de fois que l'objet a été instancié : ".$C3->nbInstanceObjet."</p>"; // Accès à une propriété de l'objet via "$C3->nbInstanceObjet" // Affiche 1 car chaque objet a été produit 1 fois 

    /* Exemple :
    * Une dame a 3 enfants, donc elle est mère 3 fois et chacun de ses enfants est né UNE seule fois.
    * Ici, la classe est la "mère" ayant eu 3 enfants et chaque "enfant" fait référence à un objet crée
    */

?>