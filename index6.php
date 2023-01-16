<?php
echo "<a href='index6.php?batiment=12&salle=101'>lien</a>";

if (isset($_GET["batiment"]) && isset($_GET["salle"])){
    $bat = $_GET["batiment"];
    $salle = $_GET["salle"];
    echo $bat . $salle;
}else{
    echo "erreur";
}