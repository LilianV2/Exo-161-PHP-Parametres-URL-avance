<?php

echo "<a href='index2.php?nom=Nemare&prenom=Jean'>lien</a><br>";

if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["age"])){
    echo $_GET["prenom"] . " " . $_GET["nom"];
}else{
    //rajout d'un $_GET['age'] pour tester l'erreur
    echo "erreur";
}