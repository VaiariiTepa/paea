<?php
    //Connexion à la base de données
    include __DIR__ . '/../bdd/connexion_bd.php';

    class search
    {
        public function searchDemande($nom, $prenom){
            global $mysqli;

            $request = "SELECT *, s.name as 'nom_service',d.date as 'date_demande' ,d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid where h.nom = '".$nom."' and h.prenom = '".$prenom."'";
            var_dump($request);
            $result = $mysqli->query($request);
        }
    }




?>