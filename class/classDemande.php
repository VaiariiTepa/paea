<?php
//Connexion à la base de données
include __DIR__ . '/../bdd/connexion_bd.php';

class demande
{
    /**
     * Get New Demandes
     *
     * @return $t_demande
     */
    function getNewDemande(){
        global $mysqli;
        $t_demande = array();
        $request = "SELECT *, s.name as 'nom_service',d.date as 'date_demande' ,d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid";

        $result = $mysqli->query($request);
        
        foreach ($result as $row){
            $t_demande[] = $row;
        }


        return $t_demande;
    }
}


?>