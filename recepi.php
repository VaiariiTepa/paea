<?php

    use Dompdf\Options;
    use Dompdf\Dompdf;
    // import dompdf
    require_once 'asset/dompdf/autoload.inc.php';
    include("class/classPaea.php");

    $paea = new paea();

    // date
    setlocale(LC_TIME, 'fra_fra');
    $today_date = strftime('%A %d %B %Y');
    

    // je récupère les input
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $birthday = $_POST['birthday'];
    $birthday_place = $_POST['birthday_place'];
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
    $paea->newHabitant($nom,$prenom,$birthday,$birthday_place,$tel,$mail,$adresse,$quartier,$servitude,$lot);
    $LastHabitantId = $paea->getLastHabitant();
    
    // create new demande
    $paea->newDemande($LastHabitantId,$serviceId,$remarque,$traitement,$super_admin);
    
    $lastDemande = $paea->getLastDemande();

    // import bootstrap to pdf
    $html = '<style>'.file_get_contents("asset/css/bootstrap.css").'</style>';

    // ob_start
    ob_start();

        // require_once 'recepi_content.php';
        require_once 'recepi_content.php';
        $html.= ob_get_contents();
    
    ob_end_clean();



    $option = new Options();
    
    $option->set('defaultFont','Letter');
    
    $dompdf = new Dompdf($option);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4','portrait');

    $dompdf->render();

    $nameFile = $nom.'_'.$prenom.'_récépissé.pdf';

    $dompdf->stream($nameFile);


?>
