<?php
    include __DIR__ . '/../class/classPaea.php';
    include __DIR__ . '/../class/classService.php';
    $paea = new paea();
    $service = new service();
    
    // administration = 7
    $listAdministration = $service->getCountService(7);
    $listFinishAdministration = $service->getCountEtatAdministration(3);
    $listInProgressAdministration = $service->getCountEtatAdministration(1);
    $listWaitingAdministration = $service->getCountEtatAdministration(2);
    $listNotTreatAdministration = $service->getCountEtatAdministration(0);
    
    $numAdmin = count($listAdministration);
    $NumNotTreatAdministration = count($listNotTreatAdministration);
    $numFinishAdmin = count($listFinishAdministration);
    // $numInProgress = count($listInProgressAdministration);
    $numWaitingAdmin = count($listWaitingAdministration);

    // Education = 1
    $listEducation = $service->getCountService(1);
    $listFinishEducation = $service->getCountEtatEducation(3);
    $listInProgressEducation = $service->getCountEtatEducation(1);
    $listWaitingEducation = $service->getCountEtatEducation(2);
    $listNotTreatEducation = $service->getCountEtatEducation(0);
    
    $numEducation = count($listEducation);
    $NumNotTreatEducation = count($listNotTreatEducation);
    $numFinishEducation = count($listFinishEducation);
    // $numInProgressEducation = count($listInProgressEducation);
    $numWaitingEducation = count($listWaitingEducation);

    // Voirie = 2
    $listVoirie = $service->getCountService(2);
    $listFinishVoirie = $service->getCountEtatVoirie(3);
    $listInProgressVoirie = $service->getCountEtatVoirie(1);
    $listWaitingVoirie = $service->getCountEtatVoirie(2);
    $listNotTreatVoirie = $service->getCountEtatVoirie(0);
    
    $numVoirie = count($listVoirie);
    $NumNotTreatVoirie = count($listNotTreatVoirie);
    $numFinishVoirie = count($listFinishVoirie);
    // $numInProgressVoirie = count($listInProgressVoirie);
    $numWaitingVoirie = count($listWaitingVoirie);

    // Police = 3
    $listPolice = $service->getCountService(3);
    $listFinishPolice = $service->getCountEtatPolice(3);
    $listInProgressPolice = $service->getCountEtatPolice(1);
    $listWaitingPolice = $service->getCountEtatPolice(2);
    $listNotTreatPolice = $service->getCountEtatPolice(0);
    
    $numPolice = count($listPolice);
    $NumNotTreatPolice = count($listNotTreatPolice);
    $numFinishPolice = count($listFinishPolice);
    // $numInProgressPolice = count($listInProgressPolice);
    $numWaitingPolice = count($listWaitingPolice);

    // Pompier = 4
    $listPompier = $service->getCountService(4);
    $listFinishPompier = $service->getCountEtatPompier(3);
    $listInProgressPompier = $service->getCountEtatPompier(1);
    $listWaitingPompier = $service->getCountEtatPompier(2);
    $listNotTreatPompier = $service->getCountEtatPompier(0);
    
    $numPompier = count($listPompier);
    $NumNotTreatPompier = count($listNotTreatPompier);
    $numFinishPompier = count($listFinishPompier);
    // $numInProgressPompier = count($listInProgressPompier);
    $numWaitingPompier = count($listWaitingPompier);

    // Emplois = 5
    $listEmploi = $service->getCountService(5);
    $listFinishEmploi = $service->getCountEtatEmploi(3);
    $listInProgressEmploi = $service->getCountEtatEmploi(1);
    $listWaitingEmploi = $service->getCountEtatEmploi(2);
    $listNotTreatEmploi = $service->getCountEtatEmploi(0);
    
    $numEmploi = count($listEmploi);
    $NumNotTreatEmploi = count($listNotTreatEmploi);
    $numFinishEmploi = count($listFinishEmploi);
    // $numInProgressEmploi = count($listInProgressEmploi);
    $numWaitingEmploi = count($listWaitingEmploi);

    // Regie = 6
    $listRegie = $service->getCountService(6);
    $listFinishRegie = $service->getCountEtatRegie(3);
    $listInProgressRegie = $service->getCountEtatRegie(1);
    $listWaitingRegie = $service->getCountEtatRegie(2);
    $listNotTreatRegie = $service->getCountEtatRegie(0);
    
    $numRegie = count($listRegie);
    $NumNotTreatRegie = count($listNotTreatRegie);
    $numFinishRegie = count($listFinishRegie);
    // $numInProgressRegie = count($listInProgressRegie);
    $numWaitingRegie = count($listWaitingRegie);

    // Jeunesse = 8
    $listJeunesse = $service->getCountService(8);
    $listFinishJeunesse = $service->getCountEtatJeunesse(3);
    $listInProgressJeunesse = $service->getCountEtatJeunesse(1);
    $listWaitingJeunesse = $service->getCountEtatJeunesse(2);
    $listNotTreatJeunesse = $service->getCountEtatJeunesse(0);
    
    $numJeunesse = count($listJeunesse);
    $NumNotTreatJeunesse = count($listNotTreatJeunesse);
    $numFinishJeunesse = count($listFinishJeunesse);
    // $numInProgressJeunesse = count($listInProgressJeunesse);
    $numWaitingJeunesse = count($listWaitingJeunesse);

    // Travaux en Regie = 9
    $listTravauxRegie = $service->getCountService(9);
    $listFinishTravauxRegie = $service->getCountEtatTravauxRegie(3);
    $listInProgressTravauxRegie = $service->getCountEtatTravauxRegie(1);
    $listWaitingTravauxRegie = $service->getCountEtatTravauxRegie(2);
    $listNotTreatTravauxRegie = $service->getCountEtatTravauxRegie(0);
    
    $numTravauxRegie = count($listTravauxRegie);
    $NumNotTreatTravauxRegie = count($listNotTreatTravauxRegie);
    $numFinishTravauxRegie = count($listFinishTravauxRegie);
    // $numInProgressTravauxRegie = count($listInProgressTravauxRegie);
    $numWaitingTravauxRegie = count($listWaitingTravauxRegie);

    // EAU = 10
    $listEau = $service->getCountService(12);
    $listFinishEau = $service->getCountEtatEaux(3);
    $listInProgressEau = $service->getCountEtatEaux(1);
    $listWaitingEau = $service->getCountEtatEaux(2);
    $listNotTreatEau = $service->getCountEtatEaux(0);
    
    $numEau = count($listEau);
    $NumNotTreatEau = count($listNotTreatEau);
    $numFinishEau = count($listFinishEau);
    // $numInProgressEau = count($listInProgressEau);
    $numWaitingEau = count($listWaitingEau);

    // RDV Tavana = 11
    $listTavana = $service->getCountService(13);
    $listFinishTavana = $service->getCountEtatMaire(3);
    $listInProgressTavana = $service->getCountEtatMaire(1);
    $listWaitingTavana = $service->getCountEtatMaire(2);
    $listNotTreatTavana = $service->getCountEtatMaire(0);
    
    $numTavana = count($listTavana);
    $NumNotTreatTavana = count($listNotTreatTavana);
    $numFinishTavana = count($listFinishTavana);
    // $numInProgressTavana = count($listInProgressTavana);
    $numWaitingTavana = count($listWaitingTavana);



    // $numToFinishAdmin = $numFinishAdmin + $numInProgress + $numWaitingAdmin;
    // $toFinishAdmin = $numAdmin - $numToFinishAdmin;
    // $percent_to_finish = 100 * $numToFinishAdmin;
    // $percent_to_finish = $percent_to_finish / $numAdmin;
    // $percent_to_finish = 100 - $percent_to_finish;

    // $ToWaiting =  100 * $numWaitingAdmin;
    // $percent_to_waiting =  $ToWaiting / $numAdmin;

    // $ToInProgress =  100 * $numInProgress;
    // $percent_to_in_progress =  $ToInProgress / $numAdmin;

    // $ToFinishProgress =  100 * $numFinishAdmin;
    // $percent_to_finish_progress =  $ToFinishProgress / $numAdmin;



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Administrations</title>
    <style>
        .accordion-button{
            display:block;
        }
    </style>
</head>
<body>
    <div id="content">    
        <!-- tester si l'utilisateur est connecté -->
        <?php
            session_start();
            if(isset($_GET['deconnexion']))
            { 
                if($_GET['deconnexion']==true)
                {  
                    session_unset();
                    header("location:../login.php");
                    
                }
            }elseif(isset($_SESSION['username'])){
                $user = $_SESSION['username'];
                
                print '<ul class="nav justify-content-center">';   
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
                    print '<li class="nav-item">'; 
                        print '<a class="nav-link" href="admin.php?deconnexion=true">';
                            print '<span>';
                                print 'Déconnexion';
                            print '</span>';
                        print '</a>'; 
                    print '</li>'; 
                print '</ul>'; 
            }else{  
                header("location:../login.php");
            }
        ?>
        <div class="container">
            <div class="row">
                <!-- gauche -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="accordion" id="accordionExample">
                            <!-- login -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Tableau de bord
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Admin</th>
                                                    <th scope="col">Education</th>
                                                    <th scope="col">Voirie</th>
                                                    <th scope="col">Police</th>
                                                    <th scope="col">Pompier</th>
                                                    <th scope="col">Emplois</th>
                                                    <th scope="col">Regie</th>
                                                    <th scope="col">Jeunesse</th>
                                                    <th scope="col">Trav.Régie</th>
                                                    <th scope="col">Eau</th>
                                                    <th scope="col">rdv Tavana</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <th>
                                                        Nombre de demandes
                                                    </th>
                                                    <td>
                                                        <?php
                                                            print $numAdmin;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numEducation;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numVoirie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numPolice;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numPompier;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numEmploi;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numRegie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numJeunesse;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numTravauxRegie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numEau;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numTavana;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <!-- <tr class="table-danger text-center">
                                                    <th scope="row">
                                                        Non traiter
                                                    </th>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatAdministration;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatEducation;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatVoirie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatPolice;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatPompier;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatEmploi;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatRegie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatJeunesse;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatTravauxRegie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatEau;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $NumNotTreatTavana;
                                                        ?>
                                                    </td>
                                                </tr> -->
                                                <tr class="table-warning text-center">
                                                    <th scope="row">
                                                        En attente
                                                    </th>
                                                    <td>
                                                        <?php
                                                            print $numWaitingAdmin;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingEducation;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingVoirie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingPolice;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingPompier;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingEmploi;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingRegie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingJeunesse;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingTravauxRegie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingEau;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            print $numWaitingTavana;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr class="table-success text-center">
                                                    <th scope="row">
                                                        Terminer
                                                    </th>
                                                    <td>
                                                        <?php 
                                                            print $numFinishAdmin;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishEducation;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishVoirie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishPolice;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishPompier;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishEmploi;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishRegie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishJeunesse;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishTravauxRegie;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishEau;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            print $numFinishTavana;
                                                        ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>

<?php
?>