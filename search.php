<?php
    include("class/classSearch.php");

    $paea = new search();
    
    if (isset($_POST['btn-search'])){
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
    
        $t_listDemande = $paea->searchDemande($nom, $prenom);

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
                <form action="search.php" method="post">
                    
                    <input type="text" class="form-control" name="nom" placeholder="nom">
                    <input type="text" class="form-control" name="prenom" placeholder="prénom">
                    <button type="submit" name="btn-search" class="btn btn-primary">
                        Chercher
                    </button>

                </form>
                
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            </body>
        </html>
