<?php
    include("class/classPaea.php");

    $paea = new paea();
    
    $t_service = $paea->getService();

    // si je clique le bouton new demande
    if(isset($_POST['newDemande'])){

        // je récupère les input
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $birthday = $_POST['birthday'];
        $tel = $_POST['tel'];
        $mail = $_POST['mail'];
        $adresse = $_POST['adresse'];
        $quartier = $_POST['quartier'];
        $servitude = $_POST['servitude'];
        $lot = $_POST['lot'];
        $serviceId = $_POST['service'];
        $remarque = $_POST['remarque'];
        $super_admin = $_POST['super_admin'];
        
        // 0 = new demande
        $traitement = 0;

        // create new habitant
        $paea->newHabitant($nom,$prenom,$birthday,$tel,$mail,$adresse,$quartier,$servitude,$lot);
        $LastHabitantId = $paea->getLastHabitant();
        
        // create new demande
        $paea->newDemande($LastHabitantId,$serviceId,$remarque,$traitement,$super_admin);
        

    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Demandes des administrés</title>
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
                    header("location:login.php");
                }
            }elseif(isset($_SESSION['username'])){
                $user = $_SESSION['username'];
                // afficher un message
                print '<ul class="nav justify-content-center">';   
                    print '<li class="nav-item">'; 
                        print '<a class="nav-link active" aria-current="page" href="index.php">';  
                            print 'Demande';
                        print '</a>';  
                    print '</li>'; 
                    print '<li class="nav-item">'; 
                        print '<a class="nav-link" href="admin/admin.php">'; 
                            print 'Tableau de bord';
                        print '</a>';  
                    print '</li>'; 
                    print '<li class="nav-item">'; 
                        print '<a class="nav-link" href="index.php?deconnexion=true">';
                            print '<span>';
                                print 'Déconnexion';
                            print '</span>';
                        print '</a>'; 
                    print '</li>'; 
                print '</ul>'; 
                print '<div class="container">
                    <div class="row">
                        <!-- gauche -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        Nouvelles demandes
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center">
                                        Réception des nouvelles demandes et redirection vers le service concerné
                                    </h6>
                                    <p class="card-text">
                                        <form method="post" action="index.php">
                                            
                                            <!-- nom prenom -->
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                                                </div>
                                            </div>

                                            <!-- naissance + lieu -->
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <input type="date" name="birthday" class="form-control" placeholder="Date de naissance">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" name="birthday_place" class="form-control" placeholder="lieu de naissance">
                                                </div>
                                                <div class="col-6 mt-3">
                                                    <input type="tel" name="tel" class="form-control" placeholder="Téléphone">
                                                </div>
                                                <div class="col-6 mt-3">
                                                    <input type="mail" name="mail" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
            
                                            <!-- Adresse géographique -->
                                            <div class="row mb-3">
                                                <div class="col-6 mb-3">
                                                    <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <input type="text" name="quartier" class="form-control" placeholder="Quartier">
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <input type="text" name="servitude" class="form-control" placeholder="Servitude">
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <input type="text" name="lot" class="form-control" placeholder="Maison N°">
                                                </div>
                                            </div>
                                            <!-- service -->
                                            <div class="row mb-3 d-flex flex-wrap">';
                                                
                                                
                                                    foreach ($t_service as $v_service){
                                                    
                                                        print '<div class="col-3 mb-2">';
                                                            print '<input type="radio" class="btn-check" name="service" value="'.$v_service['rowid'].'" id="'.$v_service['name'].'" autocomplete="off">';
                                                            print '<label class="btn btn-outline-primary" for="'.$v_service['name'].'">'.$v_service['name'].'</label>';
                                                        print '</div>';
                                                    
                                                    
                                                    }
                                                
                                            print '</div>
                                            <!-- commentaire -->
                                            <div class="row mb-2">
                                                <div class="col-12">
                                                    <label for="remarque">
                                                        Objet de la demande:
                                                    </label>
                                                    <textarea name="remarque" id="remarque" class="form-control"></textarea>
                                                </div>
                                            </div>';
                                            
                                                print '<input type="hidden" name="super_admin" value="'.$user.'">';
                                            
                                            print '<button type="submit" name="newDemande" class="btn btn-primary mt-2">
                                                Soumettre
                                            </button>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- droite
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        Recherche et Suivit
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center">
            
                                    </h6>
                                    <p class="card-text">
                                        Formularie de revcherche
                                    </p>
                                </div>
                            </div>            
                        </div> -->
                    </div>
                </div>';
            }else {
                header("location:login.php");
            }
        ?>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
