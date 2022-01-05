<?php
include("conf.php");

//Connexion à la base de données
$mysqli = new mysqli($servername, $username, $password, $dbname);

//Vérification de la connexion
if(mysqli_connect_errno()){
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}
?>