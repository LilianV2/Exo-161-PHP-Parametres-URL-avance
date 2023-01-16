<?php
// localhost n'a pas marché, j'ai créé un lien pour pouvoir tester

echo "<a href='index1.php?nom=Nemare&prenom=Jean'>lien</a><br>";

if(isset($_GET["nom"]) && isset($_GET["prenom"])){
    echo $_GET["prenom"] . " " . $_GET["nom"];
}