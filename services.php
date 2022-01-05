<?php
    include('class/classPaea.php');


    $paea = new paea();
    
    if (isset($_POST['btn-reception'])) {

        $rowid_demande = $_POST['rowid_demande'];
        $paea->receptionDemande($rowid_demande);
        
    }
    
    if (isset($_POST['btn-attente'])) {

        
        $rowid_demande = $_POST['rowid_demande'];
        $paea->attenteDemande($rowid_demande);
        
    }
    
    if (isset($_POST['btn-terminer'])) {

        
        $rowid_demande = $_POST['rowid_demande'];
        $paea->terminerDemande($rowid_demande);
        
    }
    



    $t_listDemandes = $paea->getNewDemande();
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

    <div class="container-fluid mt-2">
        <div class="row ">
            <!-- gauche -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card m-4">
                            <div class="card-header">
                                Nouvelles demandes
                            </div>
                            <div class="card-body" id="newDemandes">
                                
                                <?php 
                                        
                                        include('newDemandes.php'); 
                                    
                                ?>

                            </div>
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
                                            <th scope="col">Nom Prénom</th>
                                            <th scope="col">Téléphone/Date de naissance</th>
                                            <th scope="col">Services</th>
                                            <th scope="col">Remarque</th>
                                            <th scope="col">Date de la demande</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($t_listDemandes as $v_demande){
                                                if($v_demande['traitement_id'] == 1){
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
                                                            print $v_demande['date_demande'];
                                                        print' </td>';
                                                        print' <td>';
                                                            print '<form method="post" action="services.php">';
                                                                print '<input type="hidden" name="rowid_demande" value="'.$v_demande['rowid_demande'].'">';
                                                                print '<button type="submit" name="btn-attente" class="btn btn-outline-warning">En attente</button>';
                                                            print '</form>';
                                                            print '<form method="post" action="services.php">';
                                                                print '<input type="hidden" name="rowid_demande" value="'.$v_demande['rowid_demande'].'">';
                                                                print '<button type="submit" name="btn-terminer" class="btn btn-outline-success">Terminer</button>';
                                                            print '</form>';
                                                        print' </td>';
                                                    print' </tr>';
                                                }
                                            }
                                        ?>
                                    </tbody>
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
                                            <th scope="col">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($t_listDemandes as $v_demande) {

                                                if ($v_demande['traitement_id'] == 2) {
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
                                                            print $v_demande['date_demande'];
                                                        print' </td>';
                                                        print' <td>';
                                                        print '<form method="post" action="services.php">';
                                                            print '<input type="hidden" name="rowid_demande" value="'.$v_demande['rowid_demande'].'">';
                                                            print '<button type="submit" name="btn-reception" class="btn btn-outline-warning">Reprendre</button>';
                                                        print '</form>';
                                                    print' </tr>';
                                                            
                                                }
                                                
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                        <div class="card m-4">
                            <div class="card-header text-center">
                                Terminer
                            </div>
                            <ul class="list-group list-group-flush">
                                
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
                                    <tbody>
                                        <?php
                                            foreach($t_listDemandes as $v_demande) {

                                                if ($v_demande['traitement_id'] == 3) {
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
                                                            print $v_demande['date_demande'];
                                                        print' </td>';
                                                    print' </tr>';
                                                            
                                                }
                                                
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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