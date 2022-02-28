<?php
//Connexion à la base de données
include __DIR__ . '/../bdd/connexion_bd.php';

class service
{

    /**
     * Get education service
     *
     * @return $t_service
     */
    public function getEducation(){
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *, s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE s.rowid = 1";
        $result = $mysqli->query($requete);
        
        foreach ($result as $row){
            $t_service[] = $row;
        }

        return $t_service;
    }

    /**
     * Get Count Service
     *
     * @return $t_service
     */
    public function getCountService($service_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE s.rowid = ".$service_id;
        $result = $mysqli->query($requete);
        
        foreach ($result as $row){
            $t_service[] = $row;
        }

        return $t_service;
    
    }




    /**
     * Get Count In Progress Administration
     *
     * @return $t_service
     */
    public function getCountEtatAdministration($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 7 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }



        return $t_service;
    }

    /**
     * Get Etat All Education
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatEducation($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 1 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }


    /**
     * Get Etat All Voirie
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatVoirie($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 2 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }

    /**
     * Get Etat All Police
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatPolice($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 3 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }


    /**
     * Get Etat All Pompier
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatPompier($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 4 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }

    /**
     * Get Etat All Emplois
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatEmploi($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 5 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }

    /**
     * Get Etat All Regie
     *
     * @param [type] $traitement_id
     * @return $t_regie
     */
    public function getCountEtatRegie($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 6 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }

    /**
     * Get Etat All Jeunesse
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatJeunesse($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 8 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }

    /**
     * Get Etat All Travaux En Régie
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatTravauxRegie($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 9 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }

    /**
     * Get Etat All Eau
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatEaux($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 12 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }

    /**
     * Get Etat All Tavana
     *
     * @param [type] $traitement_id
     * @return $t_service
     */
    public function getCountEtatMaire($traitement_id){
    
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE d.fk_service_id = 13 AND d.traitement_id = ".$traitement_id;
        
        $result = $mysqli->query($requete);
        if ($result) {
            foreach ($result as $row){
                $t_service[] = $row;
            }
        }

        return $t_service;
    }

    /**
     * Get Voirie
     *
     * @return $t_service
     */
    public function getVoirie(){
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT *,d.rowid as 'id', s.name as 'nom_service', d.date as 'date_demande' , d.rowid as 'rowid_demande' FROM `demandes` as d LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE s.rowid = 2";
        $result = $mysqli->query($requete);
        
        foreach ($result as $row){
            $t_service[] = $row;
        }

        return $t_service;
    }

    /**
     * set Service Type
     *
     * @param int $service_id
     * @param string $service_type
     * 
     */
    public function setServiceType($service_id,$service_type) {
        global $mysqli;

        
        $echape = array("'");
        
        $service_type = str_replace($echape, "\'",$service_type);
        

        $request = "INSERT INTO `service_type`(`name`, `service_id`)";
        $request.= "VALUES";
        $request.= "('".$service_type."','".$service_id."')";
        
        $res = $mysqli->query($request);
        if ($res == 1) {
            // var_dump('success');
        }else {
            // var_dump('error');
        }

    }


    /**
     * get all type services
     *
     * @return $t_result
     */
    public function getServiceType(){

        global $mysqli;
        $t_result = array();

        $request = "SELECT s.rowid as 'id_service',s.name as 'nom_service',st.rowid as 'id_type_service',st.name as 'nom_type_service' FROM `service_type` as st LEFT JOIN `services` as s on s.rowid = st.service_id";
        $res = $mysqli->query($request);

        if(isset($res)) {
            
            foreach ($res as $row){

                if('Eau' == $row['nom_service']) {
                    $t_result['Eau']['service_type'][] = $row['nom_type_service'];
                }elseif ('Voirie' ==  $row['nom_service']) {
                    $t_result['Voirie']['service_type'][] = $row['nom_type_service'];
                }elseif ('Education' ==  $row['nom_service']) {
                    $t_result['Education']['service_type'][] = $row['nom_type_service'];
                }elseif ('Pompier' ==  $row['nom_service']) {
                    $t_result['Pompier']['service_type'][] = $row['nom_type_service'];
                }elseif ('Emplois' ==  $row['nom_service']) {
                    $t_result['Emplois']['service_type'][] = $row['nom_type_service'];
                }elseif ('Régie' ==  $row['nom_service']) {
                    $t_result['Régie']['service_type'][] = $row['nom_type_service'];
                }elseif ('Guichet unique' ==  $row['nom_service']) {
                    $t_result['Guichet_unique']['service_type'][] = $row['nom_type_service'];
                }elseif ('Jeunesse et sport' ==  $row['nom_service']) {
                    $t_result['JeunesseEtSport']['service_type'][] = $row['nom_type_service'];
                }elseif ('Travaux en regie' ==  $row['nom_service']) {
                    $t_result['TravauxRegie']['service_type'][] = $row['nom_type_service'];
                }elseif ('Tavana' ==  $row['nom_service']) {
                    $t_result['Tavana']['service_type'][] = $row['nom_type_service'];
                }

            }

        }

        return $t_result;
    }


    /**
     * Ajax get type service
     *
     * @param [type] $service_id
     * @return void
     */
    public function AjaxGetServiceType($service_id){
        global $mysqli;
        $t_result = array();
        $request = "SELECT s.rowid as 'id_service',s.name as 'nom_service',st.rowid as 'id_type_service',st.name as 'nom_type_service' FROM `service_type` as st LEFT JOIN `services` as s on s.rowid = st.service_id WHERE s.rowid =".$service_id;
        $res = $mysqli->query($request);
        if (isset($res)) {
            foreach($res as $row){
                $t_result[] = $row['nom_type_service'];
            }
        }

        return json_encode($t_result);


    }


}