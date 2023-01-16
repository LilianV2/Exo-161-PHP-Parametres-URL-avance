<?php

echo "<a href='index3.php?dateDebut=2/05/2016&dateFin=27/11/2016'>lien</a>";

if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])){
    $start = $_GET['dateDebut'];
    $end = $_GET['dateFin'];
    echo $start . $end;
}else{
    echo "erreur";
}