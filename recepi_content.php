<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="asset/css/bootstrap.css">
        <title>recepisse</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card mt-5">
                    Paea le: <?php print ' '.$today_date ?> 
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                Mairie de PAEA
                            </h5>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    Service: <strong><?php print $lastDemande['nom_service'] ?></strong>                                
                                </div>
                            </div>
                            <hr>
                            <p class="card-text">
                                <strong>
                                    <?php print $lastDemande['nom'].' '.$lastDemande['prenom'] ?>                                    
                                </strong>
                                / née le <?php print $lastDemande['birthday'].' à '.$lastDemande['birthday_place'] ?> 
                                <br>
                                - Habite à: <?php print $lastDemande['adresse'].', '.$lastDemande['quartier'].' '.$lastDemande['servitude'].', lot n°'.$lastDemande['lot'] ?>
                            </p>
                            <hr>
                            <p class="card-text">
                                Objet de la demande:
                            </p>
                            <p>
                                <strong>
                                    <?php print $lastDemande['remarque'] ?>
                                </strong>
                            </p>
                            <hr>
                            <p>
                                Demande enregistré par: 
                                <strong>
                                    <?php print $lastDemande['super_admin'] ?>
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>
</html>
