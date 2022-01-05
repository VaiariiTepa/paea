<?php
    include("fonctions.php");

    $paea = new paea();
    

    if(isset($_POST['newDemande'])){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $birthday = $_POST['birthday'];
        $tel = $_POST['tel'];
        $adresse = $_POST['adresse'];
        $service = $_POST['service'];
        $remarque = $_POST['remarque'];

        $paea->newDemande($nom,$prenom,$birthday,$tel,$adresse,$service,$remarque);

    }
?>