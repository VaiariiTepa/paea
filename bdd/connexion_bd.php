<?php
include("conf.php");

//Connexion � la base de donn�es
$mysqli = new mysqli($servername, $username, $password, $dbname);

//V�rification de la connexion
if(mysqli_connect_errno()){
    printf("�chec de la connexion : %s\n", mysqli_connect_error());
    exit();
}
?>