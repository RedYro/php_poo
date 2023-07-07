<?php
    require_once("Heritage.php");

    // Création d'un "Admin" //
    
    echo "<h2>Création d'un \"Admin\"</h2>";
    $admin1 = new Admin(); // Création d'un objet "admin1" qui hérite de la classe "Membre" 
    // Affiche la méthode "__construct" de la classe "Membre"

    echo $admin1->inscription(); // Accès à la méthode "inscription" de la classe "Membre" par l'objet instancié de la classe "Admin" -> $admin1
    echo $admin1->connection();
    echo $admin1->id;

    //----------------------------------------------------------------

    // Création d'un "Membre" //

    echo "<h2>Création d'un \"Membre\"</h2>";
    $membre1 = new Membre();
    echo $membre1->inscription();
    echo $membre1->connection(); // Accès à la méthode "connection" par l'objet '$membre1'
    // echo $membre1->accessBackOffice(); // Accès à la méthode "accessBackOffice" impossible car celle-ci n'est pas présente dans la classe "Membre", aucun héritage n'est présent sur la classe "Membre" (héritage présent seulement de "Membre" à "Admin")
    // Lors d'un héritage, on hérite de tout même les propriétés ou méthodes "private" 

?>