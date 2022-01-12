<?php
    include('class/classPaea.php');


    $paea = new paea();
    
    if (isset($_POST['btn-reception'])) {

        $rowid_demande = $_POST['rowid_demande'];
        $paea->receptionDemande($rowid_demande);
        $t_listAttenteDemandes = $paea->getAttenteDemande($rowid_demande);        
    }
    
    if (isset($_POST['btn-attente'])) {

        $note = $_POST['note'];
        $rowid_demande = $_POST['rowid_demande'];
        $paea->attenteDemande($rowid_demande,$note);
        
    }
    
    if (isset($_POST['btn-terminer'])) {
        if(isset($_POST['accord_accepter'])) {
            $accord_accepter = 1;
            $rowid_demande = $_POST['rowid_demande'];
            $note_statut = $_POST['note_statut'];
            $paea->terminerDemande($rowid_demande,$accord_accepter,$note_statut);
        }elseif(isset($_POST['accord_refuser'])){
            $accord_refuser = 0;
            $note_statut = $_POST['note_statut'];
            $rowid_demande = $_POST['rowid_demande'];
            $paea->terminerDemande($rowid_demande,$accord_refuser,$note_statut);
        }
        
    }
    
    $t_listDemandes = $paea->getNewDemande();

    $today_date = date('d-m-Y h:i:s', time());
    // echo $date;

    // date('d-m-Y H:i:s', strtotime($v_demande['date_demande']));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Services ... (affichage modèles)</title>
    <style>
        .accordion-button{
            display:block;
        }
    </style>
</head>
<body>
    <div id="content">    
        <a href='services.php?deconnexion=true'><span>Déconnexion</span></a>
        
        <!-- tester si l'utilisateur est connecté -->
        <?php
            session_start();
            if(isset($_GET['deconnexion']))
            { 
                if($_GET['deconnexion']==true)
                {  
                    session_unset();
                    header("location:login.php");
                
                }
            }elseif(isset($_SESSION['username']))
            {
                $user = $_SESSION['username'];
                // afficher un message
                echo "<br>Ia'ora na ".$user.", vous êtes connectés";
                print '<div class="container-fluid mt-2">
                    <div class="row ">
                        <!-- gauche -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card m-4">
                                        <div class="card-header">
                                            Nouvelles demandes
                                        </div>
                                        <div class="card-body" id="newDemandes">';
                                            
                                                    
                                                    include('newDemandes.php'); 
                                              
                                        print '</div>
                                    </div>
                                </div>
                                <!-- droite -->
                                <div class="col-md-6">
                                    <div class="card m-4">
                                        <div class="card-header text-center">
                                            En cours
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th >Nom Prénom</th>
                                                        <th scope="col">Téléphone/Date de naissance</th>
                                                        <th scope="col">Services</th>
                                                        <th scope="col">Remarque</th>
                                                        <th scope="col">Date de la demande</th>
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                                        if (isset($t_listDemandes)) {
                                                            foreach ($t_listDemandes as $v_demande){
                                                                if(($v_demande['traitement_id'] == 1) && ($v_demande['name_directeur'] == $user)){
                                                                    print' <tr>';
                                                                        print' <td>';
                                                                            print $v_demande['nom'].' '.$v_demande['prenom'];
                                                                        print' </td>';
                                                                        print' <td>';
                                                                            print $v_demande['tel'].' / '.$v_demande['birthday'];
                                                                        print' </td>';
                                                                        print' <td>';
                                                                            print $v_demande['nom_service'];
                                                                        print' </td>';
                                                                        print' <td>';
                                                                            print $v_demande['remarque'];
                                                                        print' </td>';
                                                                        print' <td>';
                                                                            print date('d-m-Y H:i:s', strtotime($v_demande['date_demande']));
                                                                        print' </td>';
                                                                    print' </tr>';
            
                                                                print '<div class="row mb-3">';
                                                                    print '<div class="col-md-9">';
                                                                        print '<form method="post" action="services.php">';
                                                                            print '<input type="text" name="note" class="form-control" placeholder="Note, mise en attente">';
                                                                        print '</div>';
                                                                    print '<div class="col-md-3">';
                                                                        print '<div class="row">';
                                                                            print '<input type="hidden" name="rowid_demande" value="'.$v_demande['rowid_demande'].'">';
                                                                            print '<button type="submit" name="btn-attente" class="btn btn-outline-warning h-100">En attente</button>';
                                                                            print '</form>';                                                            
                                                                        print '</div>';
                                                                    print '</div>';
                                                                print '</div>';
                                                                print '<div class="row">';
                                                                    print '<div class="col-md-12">';
                                                                        print '<form method="post" action="services.php">';
                                                                            print '<input name="accord_accepter" value="1" type="radio">Accord</input>';
                                                                            print '<input name="accord_refuser" value="0" type="radio">Non</input>';
                                                                            print '<input type="text" name="note_statut" placeholder="commentaire">';
                                                                            print '<input type="hidden" name="rowid_demande" value="'.$v_demande['rowid_demande'].'" require>';
                                                                            print '<button type="submit" name="btn-terminer" class="btn btn-outline-success w-100">Terminer</button>';
                                                                        print '</form>';
                                                                    print '</div>';
                                                                print '</div>';
                                                                }
                                                            }
                                                        }

                                                print '</tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card m-4">
                                        <div class="card-header text-center">
                                            En attente /!\
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            
                                        <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Nom Prénom
                                                        </th>
                                                        <th scope="col">
                                                            Téléphone / date de naissance
                                                        </th>
                                                        <th scope="col">
                                                            Service
                                                        </th>
                                                        <th scope="col">
                                                            Remarque
                                                        </th>
                                                        <th scope="col">
                                                            Date de la demande
                                                        </th>
                                                        <th scope="col">
                                                            Actions
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                                        foreach($t_listDemandes as $v_demande) {
            
                                                            if (($v_demande['traitement_id'] == 2) && ($v_demande['name_directeur'] == $user)) {
                                                                print' <tr>';
                                                                    print' <td>';
                                                                        print $v_demande['nom'].' '.$v_demande['prenom'];
                                                                    print' </td>';
                                                                    print' <td>';
                                                                        print $v_demande['tel'].' / '.$v_demande['birthday'];
                                                                    print' </td>';
                                                                    print' <td>';
                                                                        print $v_demande['nom_service'];
                                                                    print' </td>';
                                                                    print' <td>';
                                                                        print $v_demande['remarque'];
                                                                    print' </td>';
                                                                    print' <td>';
                                                                        print date('d-m-Y', strtotime($v_demande['date_demande']));
                                                                    print' </td>';
                                                                    print' <td>';
                                                                    print '<form method="post" action="services.php">';
                                                                        print '<input type="hidden" name="rowid_demande" value="'.$v_demande['rowid_demande'].'">';
                                                                        print '<button type="submit" name="btn-reception" class="btn btn-outline-warning">Reprendre</button>';
                                                                    print '</form>';
                                                                print' </tr>';
            
                                                                print '<li class="list-group-item">';
                                                                    print $v_demande['note'];
                                                                print '</li>';
                                                                        
                                                            }
                                                            
                                                        }
                                                
                                                print '</tbody>
                                        </table>
                                        </ul>
                                    </div>
                                    
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-info m-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Liste des demandes terminées
                                    </button>
            
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">TERMINER</h5>
                                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            Nom Prénom
                                                        </th>
                                                        <th scope="col">
                                                            Téléphone / date de naissance
                                                        </th>
                                                        <th scope="col">
                                                            Service
                                                        </th>
                                                        <th scope="col">
                                                            Remarque
                                                        </th>
                                                        <th scope="col">
                                                            Date de la demande
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                                        foreach($t_listDemandes as $v_demande) {
            
                                                            if (($v_demande['traitement_id'] == 3) && ($v_demande['name_directeur'] == $user)) {
                                                                print' <tr>';
                                                                    print' <td>';
                                                                        print $v_demande['nom'].' '.$v_demande['prenom'];
                                                                    print' </td>';
                                                                    print' <td>';
                                                                        print $v_demande['tel'].' / '.$v_demande['birthday'];
                                                                    print' </td>';
                                                                    print' <td>';
                                                                        print $v_demande['nom_service'];
                                                                    print' </td>';
                                                                    print' <td>';
                                                                        print $v_demande['remarque'];
                                                                    print' </td>';
                                                                    print' <td>';
                                                                        print date('d-m-Y H:i:s', strtotime($v_demande['date_demande']));
                                                                    print' </td>';
                                                                print' </tr>';
                                                                        
                                                            }
                                                            
                                                        }
                                                    
                                                print '</tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }else{
                header("location:login.php");
            }
        ?>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="asset/js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){            
            setInterval('autoRefresh_div()', 10000); // refresh div after 5 secs
        });

        function autoRefresh_div()
        {
            $("#newDemandes").load("newDemandes.php");// a function which will load data from other file after x seconds
        }
    </script>
</body>
</html>