<?php
    //Connexion à la base de données
    include __DIR__ . '/../bdd/connexion_bd.php';

    class search
    {
        public function searchDemande($nom, $prenom){
            global $mysqli;
            $t_list = array();

            $echape = array("'");
            $nom = str_replace($echape, "\'",$nom);
            $prenom = str_replace($echape, "\'",$prenom);
            
            $request = "SELECT *,d.rowid as 'id', s.name as 'nom_service',d.date as 'date_demande' ,d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid where h.nom = '".$nom."' and h.prenom = '".$prenom."'";
            
            $result = $mysqli->query($request);

            foreach ($result as $row){
                $t_list[] = $row;
            }

            return $t_list;
        }
    }




?>