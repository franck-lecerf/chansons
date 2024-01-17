<?php

//$idconnection= mysqli_connect("192.168.42.42","Bourse","Cac40","Bourse");
$idconnexion = mysqli_connect ("192.168.42.42","chanson","lamusiquequejaime","Chansons");
//$connection_reussi= mysqli_select_db("Bourse");
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n");
    exit();
}
$idconnexion->set_charset("utf8");




?>
