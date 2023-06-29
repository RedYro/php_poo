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
            return "L'article a été ajouté !";
        }
        public function retirerArticles(){
            return "L'article a été retiré !";
        }
        public function nombreArticles(){

        }
    }

    // Création d'un objet représentant une instance de la classe (objet instancié)
    $panier_1 = new Panier(); // Instanciation de la classe : instanciation ou création d'une classe "Panier", stockage dans un objet, permet de passer d'une classe à un objet 
    // Panier => modèle, $panier_1 est une version concrète de ce modèle
    // "new" => mot clé permettant d'effectuer une instanciation (et donc de créer un objet)
    // var_dump($panier_1);
    debug($panier_1); // Affiche la valeur de la propriété dans la propriété : type (object), nom de la classe, référence de l'objet
    debug(get_class_methods($panier_1)); // Affiche les méthodes présentent dans l'objet 
?>