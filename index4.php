<?php

echo "<a href='index4.php?langage=PHP&serveur=LAMP'>lien</a>";

if (isset($_GET["langage"]) && isset($_GET["serveur"])){
    $lang = $_GET['langage'];
    $serv = $_GET['serveur'];
    echo $lang . $serv;
}else{
    echo "erreur";
}