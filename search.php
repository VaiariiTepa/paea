<?php
    include("class/classSearch.php");

    $paea = new search();
    
    if (isset($_POST['btn-search'])){
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
    
        $t_listDemande = $paea->searchDemande($nom,$prenom);

    }

?>
    <!DOCTYPE html>
        <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <title>Recherche</title>
            </head>
            <body>
                <ul class="nav justify-content-center">
                    <li class="nav-item"> 
                        <a class="nav-link" href="admin/admin.php">
                            <span>
                                Retour
                            </span>
                        </a> 
                    </li>
                </ul>
                <div class="container">
                    <div class="row mb-5 mt-5">
                        <div class="card">
                            <div class="col-md-12 d-flex justify-content-center mt-3">
                                <h6>
                                    Recherché une demandes
                                </h6>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <form action="search.php" method="post">
                                     
                                    <input type="text" class="form-control mb-2" name="nom" placeholder="nom">
                                    <input type="text" class="form-control mb-2" name="prenom" placeholder="prénom">
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <button type="submit" name="btn-search" class="btn btn-primary w-100">
                                                Chercher
                                            </button>
                                        </div>
                                    </div>
                
                                </form>
        
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        N° demande
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
                            <tbody>
                                <?php
                                    if (isset($t_listDemande)) {
                                        foreach($t_listDemande as $v_search){
                                            if($v_search['statut_demande'] == 1){
                                                $status = 'Accorder';
                                            }elseif($v_search['statut_demande'] == Null){
                                                $status = 'En attente de traitement';
                                            }else{
                                                $status = 'Refusé';
                                            }
                                            print '<tr>';
                                                print '<th scope="row">';
                                                    print $v_search['id'];
                                                print '</th>';
                                                print '<td>';
                                                    print $v_search['nom'].' '.$v_search['prenom'];
                                                    print '<br>';
                                                    print $v_search['tel'];
                                                print '</td>';
                                                print '<td class="table-secondary">';
                                                    print $v_search['remarque'];
                                                print '</td>';
                                                if ($status == 'Refuser') {
                                                    print '<td class="table-danger">';
                                                        print $status;
                                                    print '</td>';
                                                }else {
                                                    print '<td class="table-succes">';
                                                        print $status;
                                                    print '</td>';
                                                }
                                                
                                                print '<td class="table-light">';
                                                    print $v_search['note_statut'];
                                                print '</td>';
                                                print '<td>';
                                                    print 'Fait le: '.$v_search['date'];
                                                    print '<br>';
                                                    print 'Terminer le: '.$v_search['date_finish'];
                                                print '</td>';
                                            print '</tr>';
        
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            </body>
        </html>
