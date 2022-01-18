<?php
    include('class/classPaea.php');
    include('class/classService.php');

    $paea = new paea();
    $service = new service();
    
    if (($_GET['name_dir'] == 'Pascal') && ($_GET['service_type'] == 12)) {
        # code...
        $listCountService = $service->getCountService(12);
        $numTotalDemande = count($listCountService);
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatEaux(0);
        $t_listWaitingDemande = $service->getCountEtatEaux(2);
        $t_listFinishDemande = $service->getCountEtatEaux(3);
    }
    
    if (($_GET['name_dir'] == 'Pascal') && ($_GET['service_type'] == 2)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatVoirie(0);
        $t_listWaitingDemande = $service->getCountEtatVoirie(2);
        $t_listFinishDemande = $service->getCountEtatVoirie(3);
    }

    if (($_GET['name_dir'] == 'Ranitea') && ($_GET['service_type'] == 9)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatTravauxRegie(0);
        $t_listWaitingDemande = $service->getCountEtatTravauxRegie(2);
        $t_listFinishDemande = $service->getCountEtatTravauxRegie(3);
    }
    
        if (($_GET['name_dir'] == 'Raiteata') && ($_GET['service_type'] == 7)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatAdministration(0);
        $t_listWaitingDemande = $service->getCountEtatAdministration(2);
        $t_listFinishDemande = $service->getCountEtatAdministration(3);
    }
    
        if (($_GET['name_dir'] == 'Raniteata') && ($_GET['service_type'] == 6)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatRegie(0);
        $t_listWaitingDemande = $service->getCountEtatRegie(2);
        $t_listFinishDemande = $service->getCountEtatRegie(3);
    }
    
        if (($_GET['name_dir'] == 'Vaianu') && ($_GET['service_type'] == 1)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatEducation(0);
        $t_listWaitingDemande = $service->getCountEtatEducation(2);
        $t_listFinishDemande = $service->getCountEtatEducation(3);
    }
    
        if (($_GET['name_dir'] == 'Vaianu') && ($_GET['service_type'] == 5)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatEmploi(0);
        $t_listWaitingDemande = $service->getCountEtatEmploi(2);
        $t_listFinishDemande = $service->getCountEtatEmploi(3);
    }
    
        if (($_GET['name_dir'] == 'Vaianu') && ($_GET['service_type'] == 8)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatJeunesse(0);
        $t_listWaitingDemande = $service->getCountEtatJeunesse(2);
        $t_listFinishDemande = $service->getCountEtatJeunesse(3);
    }
    
        if (($_GET['name_dir'] == 'Antony') && ($_GET['service_type'] == 13)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatMaire(0);
        $t_listWaitingDemande = $service->getCountEtatMaire(2);
        $t_listFinishDemande = $service->getCountEtatMaire(3);
    }
    
        if (($_GET['name_dir'] == 'Tamara') && ($_GET['service_type'] == 4)) {
        # code...
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatPompier(0);
        $t_listWaitingDemande = $service->getCountEtatPompier(2);
        $t_listFinishDemande = $service->getCountEtatPompier(3);
    }
    
    if (($_GET['name_dir'] == 'Tamara') && ($_GET['service_type'] == 3)) {
        
        $t_listDemandes = $paea->getNewDemande();
        $t_listNotTreatDemande = $service->getCountEtatPolice(0);
        $t_listWaitingDemande = $service->getCountEtatPolice(2);
        $t_listFinishDemande = $service->getCountEtatPolice(3);
    }

    


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
            /* .accordion-button{
                display:block;
            } */
        </style>
    </head>
    <body>
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
        
    }elseif(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
        print '<ul class="nav justify-content-center">';
            print '<li class="nav-item">'; 
                print '<a class="nav-link" href="admin.php?deconnexion=true">';
                    print '<span>';
                        print 'Déconnexion';
                    print '</span>';
                print '</a>'; 
            print '</li>';    
            print '<li class="nav-item">'; 
                print '<a class="nav-link active" aria-current="page" href="../index.php">';  
                    print 'Demande';
                print '</a>';  
            print '</li>'; 
            print '<li class="nav-item">'; 
                print '<a class="nav-link" href="admin/admin.php">'; 
                    print 'Tableau de bord';
                print '</a>';  
            print '</li>'; 
            print '<li>';
                print '<form class="d-flex" method="post" action="search.php">';
                    print '<input class="form-control me-2" type="text" name="nom" placeholder="Nom" aria-label="Search">';
                    print '<input class="form-control me-2" type="text" name="prenom" placeholder="Prénom" aria-label="Search">';
                    print '<button class="btn btn-outline-success btn-sm" name="btn-search" type="submit">Rechercher</button>';
                print '</form>';
            print '</li>';
        print '</ul>';
        print '<div class="container">
            <div>
                Service de <strong>'.$_GET['name_dir'].'</strong>
            </div>
            <br>
            ';
            


            print '<table class="table table-bordered">
            Non traitée
            <thead>
                <tr>
                    <th scope="col">
                        N° Demandes
                    </th>
                    <th scope="col">
                        Nom Prénom
                    </th>
                    <th scope="col">
                        Objet de la demande
                    </th>
                    <th scope="col">
                        Statut
                    </th>
                    <th scope="col">
                        Date
                    </th>
                </tr>
            </thead>
            <tbody>';
            foreach ($t_listNotTreatDemande as $v_NotTreat){
                if($v_NotTreat['statut_demande'] == 1){
                    $status = 'Accorder';
                }elseif($v_NotTreat['statut_demande'] == Null){
                    $status = 'En attente de traitement';
                }else{
                    $status = 'Refusé';
                }
                print '<tr>';
                    print '<th scope="row">';
                        print $v_NotTreat['id'];
                    print '</th>';
                    print '<td>';
                        print $v_NotTreat['nom'].' '.$v_NotTreat['prenom'];
                        print '<br>';
                        print $v_NotTreat['tel'];
                    print '</td>';
                    print '<td>';
                        print $v_NotTreat['remarque'];
                    print '</td>';
                    print '<td>';
                        print $status;
                    print '</td>';
                    print '<td>';
                        print 'Fait le: '.$v_NotTreat['date'];                        
                    print '</td>';
                print '</tr>';
            }
            print '</tbody>
        </table>';

            print '<br>
            <table class="table table-bordered">
                Demandes en cours de traitement
                <thead>
                    <tr>
                        <th scope="col">
                            N° Demandes
                        </th>
                        <th scope="col">
                            Nom Prénom
                        </th>
                        <th scope="col">
                            Objet de la demande
                        </th>
                        <th scope="col">
                            Statut
                        </th>
                        <th scope="col">
                            Note si mise en attentes
                        </th>
                        <th scope="col">
                            Date
                        </th>
                    </tr>
                </thead>
                <tbody>';
                foreach ($t_listWaitingDemande as $v_finish){
                    if($v_finish['statut_demande'] == 1){
                        $status = 'Accorder';
                    }elseif($v_finish['statut_demande'] == Null){
                        $status = 'En attente de traitement';
                    }else{
                        $status = 'Refusé';
                    }
                    print '<tr>';
                        print '<th scope="row">';
                            print $v_finish['id'];
                        print '</th>';
                        print '<td>';
                            print $v_finish['nom'].' '.$v_finish['prenom'];
                            print '<br>';
                            print $v_finish['tel'];
                        print '</td>';
                        print '<td>';
                            print $v_finish['remarque'];
                        print '</td>';
                        print '<td>';
                            print $status;
                        print '</td>';
                        print '<td>';
                            print $v_finish['note_attente'];                        
                        print '</td>';
                        print '<td>';
                            print 'Fait le: '.$v_finish['date'];                     
                        print '</td>';
                    print '</tr>';
                }
                print '</tbody>
            </table>
            <br>';


            print '<table class="table table-bordered">
            Traitements terminés
            <thead>
                <tr>
                    <th scope="col">
                        N° Demandes
                    </th>
                    <th scope="col">
                        Nom Prénom
                    </th>
                    <th scope="col">
                        Objet de la demande
                    </th>
                    <th scope="col">
                        Statut
                    </th>
                    <th scope="col">
                        Commentaire final
                    </th>
                    <th scope="col">
                        Date
                    </th>
                </tr>
            </thead>
            <tbody>';
            foreach ($t_listFinishDemande as $v_finish){
                if($v_finish['statut_demande'] == 1){
                    $status = 'Accorder';
                }elseif($v_finish['statut_demande'] == 0){
                    $status = 'Refuser';
                }
                print '<tr>';
                    print '<th scope="row">';
                        print $v_finish['id'];
                    print '</th>';
                    print '<td>';
                        print $v_finish['nom'].' '.$v_finish['prenom'];
                        print '<br>';
                        print $v_finish['tel'];
                    print '</td>';
                    print '<td>';
                        print $v_finish['remarque'];
                    print '</td>';
                    print '<td>';
                        print $status;
                    print '</td>';
                    print '<td>';
                        print $v_finish['note_statut'];                        
                    print '</td>';
                    print '<td>';
                        print 'Fait le: '.$v_finish['date'];
                        print '<hr>';                        
                        print 'Terminer le: '.$v_finish['date_finish'];                        
                    print '</td>';
                print '</tr>';
            }
            print '</tbody>
        </table>';

            print '<br>


        </div>';
    }else{
        header("location:login.php");
    }
    ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="asset/js/jquery-3.6.0.min.js"></script>
    </body>
</html>