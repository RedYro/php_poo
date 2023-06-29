<?php
    /** La programmation orientée objet (POO) permet de :
    *     - Avoir une meilleure organisation et construction des  projets
    *     - Facilite la maintenance du code
    *     - Offre une grande souplesse pour faire évoluer le projet sans avoir à tout réécrire

    * En programmation, objet est le nom que l’on donne à l'élément : qui se trouve dans une variable dans lequel on peut stocker des valeurs et auquel on peut demander de faire des actions. 

    *  Pour faire simple, c’est un regroupement de valeurs et de fonctions.
    *  Pour obtenir un objet, il faut demander au langage de le créer et de nous le donner pour qu’on puisse le manipuler. Pour faire ça, on précise au langage le nom de l’élément que l’on veut manipuler, c’est-à-dire la classe.
    *  Une classe permet de produire plusieurs objets. Par convention, une classe sera nommée avec la première lettre en MAJUSCULE.
    *  La classe représente un modèle de données qui définit la structure commune à tous les objets créés à partir d'elle. La classe constitue donc une sorte de moule à travers laquelle plusieurs objets du même type et de mêmes structures peuvent être créés.
    *  Une classe représente une entité ( le modéle qu'elle doit suivre) elle a ses services (= méthodes : ce qu'elle propose et ce qu'elle permet de faire ) et elle a les attributs ( = propritétés :  ces spécificités ) 
    * 
    *  Pour en savoir plus : 
    *   - https://blog.hubspot.fr/website/programmation-orientee-objet#:~:text=La%20programmation%20orient%C3%A9e%20objet%2C%20ou,des%20instances%20individuelles%20d'objets.
    * 
    *  Pour définir  et créer une classe : on utilise le mot clé class suivit du nom de la classe (avec une lettre majuscule au début et sur chaque début d'un nouveau mot dans le nom de la classe) 
    *  exp: MyClass => voir le dossier 01_Classes_Objets. */
    require_once("functions.php");
    class Panier{
        // Propriété (ou attribut) => variable appartenant à une classe
        // Méthode => fonction appartenant à une classe 
        public int $nbProduits;

        public function ajouterArticles(){
            return "<p>L'article a été ajouté !</p>";
        }
        public function retirerArticles(){
            return "<p>L'article a été retiré !</p>";
        }
        // On peut déclarer des méthodes avec des paramètres
        public function nombreArticles(int $nb = 0){
            return "<p>Il y a $nb article(s) dans le panier.</p>";
        }
    }

    // Création d'un objet représentant une instance de la classe (objet instancié)
    $panier_1 = new Panier(); // Instanciation de la classe : instanciation ou création d'une classe "Panier", stockage dans un objet, permet de passer d'une classe à un objet 
    // Panier => modèle, $panier_1 est une version concrète de ce modèle
    // "new" => mot clé permettant d'effectuer une instanciation (et donc de créer un objet)
    // var_dump($panier_1);
    // debug($panier_1); // Affiche la valeur de la propriété dans la propriété : type (object), nom de la classe, référence de l'objet
    // debug(get_class_methods($panier_1)); // Affiche les méthodes présentent dans l'objet 
    $panier_1->nbProduits = 5; // Accès à la propriété "$nbProduits" grâce à "->", appelée "opérateur objet" et on lui donne une valeur définie ("= 5") 
    debug($panier_1);
    echo "<p>Il y a " . $panier_1->nbProduits . " produit(s) dans le panier.</p>";
    echo $panier_1->ajouterArticles(); // Accès à la méthode 1 
    echo $panier_1->retirerArticles(); // Accès à la méthode 2
    echo $panier_1->nombreArticles(); // Accès à la méthode 3
    echo $panier_1->nombreArticles(20); // Accès à la méthode 3 avec un paramètre 

    $panier_2 = new Panier(); // Instanciation d'un 2ème objet et stockage de celui-ci dans une variable
    debug($panier_2);
    $panier_2->nbProduits = 8;
    debug($panier_2); 
    unset($panier_1); // unset() => destruction d'un objet
    // debug($panier_1); // Affiche "Warning : Undefined variable $panier_1"
    debug($panier_2); 

    $panier_3 = new Panier(); // Instanciation d'un 3ème objet et stockage de celui-ci dans une variable
    debug($panier_3); // Vérification du nouvel objet $panier_3 afin de voir si celui-ci a pris la place de $panier_1 dans la mémoire : affiche 1 dans le "debug()"
    
    /*
    * Une fois crées, les objets sont indépendants et ont chacuns leurs propriétés, ils ont tous accès aux méthodes déclarées dans la classe 
    * Toutes les informations déclarées "public" dans une classe seront accessibles depuis l'extérieur de cette classe 
    */
?>