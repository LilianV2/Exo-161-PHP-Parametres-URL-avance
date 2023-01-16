<?php

echo "<a href='index5.php?semaine=12'>lien</a>";

if (isset($_GET["semaine"])){
    echo $_GET["semaine"];
}else{
    echo "erreur";
}