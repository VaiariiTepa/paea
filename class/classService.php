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
}