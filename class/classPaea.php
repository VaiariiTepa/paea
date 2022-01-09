<?php
//Connexion à la base de données
include __DIR__ . '/../bdd/connexion_bd.php';

class paea
{
    /**
     * Get All Service
     *
     * @return $result
     */
    function getService()
    {
        global $mysqli;
        $t_service = array();
        
        $requete = "SELECT * FROM services";
        $result = $mysqli->query($requete);
        
        return $result;
    }

    /**
     * Get Last Habitant
     *
     * @return void
     */
    function getLastHabitant()
    {
        global $mysqli;

        $requete = "SELECT rowid FROM `habitants` ORDER BY rowid DESC LIMIT 1";
        
        $result = $mysqli->query($requete);
        
        foreach ($result as $row){
            $result = $row['rowid'];
        }
        
        return $result;
    }
    
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

    function getAttenteDemande($rowid_demande){
        global $mysqli;
        $t_demande = array();
        $request  = "SELECT *, s.name as 'nom_service',d.date as 'date_demande' ,d.rowid as 'rowid_demande' FROM `notes` as n LEFT JOIN `demandes` as d on d.rowid = n.fk_demande_id LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid WHERE n.fk_demande_id =".$rowid_demande;
        $result = $mysqli->query($request);
        
        foreach ($result as $row){
            $t_demande[] = $row;
        }

        return $t_demande;
    }

    function getAllAttenteDemande(){
        global $mysqli;
        $t_demande = array();
        $request  = "SELECT *, s.name as 'nom_service',d.date as 'date_demande' ,d.rowid as 'rowid_demande' FROM `notes` as n LEFT JOIN `demandes` as d on d.rowid = n.fk_demande_id LEFT JOIN `habitants` as h on d.fk_habitant_id = h.rowid LEFT JOIN `services` as s on d.fk_service_id = s.rowid";
        $result = $mysqli->query($request);
        
        foreach ($result as $row){
            $t_demande[] = $row;
        }

        return $t_demande;
    }

    
    /**
     * Create new habitant
     *
     * @param [type] $nom
     * @param [type] $prenom
     * @param [type] $birthday
     * @param [type] $tel
     * @param [type] $adresse
     * @param [type] $service
     * @param [type] $remarque
     * 
     */
    function newHabitant($nom,$prenom,$birthday,$tel,$adresse)
    {
        global $mysqli;
        
        $request = "INSERT INTO `habitants`(`nom`, `prenom`, `birthday`, `tel`, `adresse`)"; 
        $request.= "VALUES";
        $request.= "('".$nom."','".$prenom."','".$birthday."','".$tel."','".$adresse."')";
        $mysqli->query($request);
        
    }
    
    /**
     * create new demande
     *
     * @param [type] $LastHabitantId
     * @param [type] $serviceId
     * @param [type] $remarque
     * @param [type] $traitement
     * @return $res
     */
    function newDemande($LastHabitantId,$serviceId,$remarque,$traitement)
    {
        global $mysqli;
        
        
        $request = "INSERT INTO `demandes`(`fk_habitant_id`, `fk_service_id`, `remarque`, `traitement_id`)"; 
        $request.= " VALUES";
        $request.= " ('".$LastHabitantId."'";
        $request.= ",'".$serviceId."'";
        $request.= ",'".$remarque."'";
        $request.= ",'".$traitement."')";
        $result = $mysqli->query($request);
        
        if($result == false){
            $res = "ERROR";
        }else{
            $res = "Success";
        }

        
        return $res;
        
    }

    /**
     * create new note to demande standby
     *
     * @param [type] $LastHabitantId
     * @param [type] $serviceId
     * @param [type] $remarque
     * @param [type] $traitement
     * @return void
     */
    function newNote($rowid_demande,$note)
    {
        global $mysqli;

        
        $request = "INSERT INTO `notes`(`fk_demande_id`, `note`) VALUES ('".$rowid_demande."','".$note."')";
        $result = $mysqli->query($request);
        
        if($result == false){
            $res = "ERROR";
        }else{
            $res = "Success";
        }

        return $res;
        
    }
    
    /**
     * update demande to reception
     *
     * @param [type] $rowid_demande
     * @return void
     */
    function receptionDemande($rowid_demande)
    {
        global $mysqli;
        
        $requete = 'UPDATE demandes SET traitement_id=1 WHERE rowid=' . $rowid_demande;
        $mysqli->query($requete);
        $note = "Nouvelle demande";
        $this->newNote($rowid_demande,$note);
        
    }

    /**
     * update demande to attente
     *
     * @param [type] $rowid_demande
     * @return void
     */
    function attenteDemande($rowid_demande)
    {
        global $mysqli;
        
        $requete = 'UPDATE demandes SET traitement_id=2 WHERE rowid=' . $rowid_demande;
        $result = $mysqli->query($requete);

        
    }

    /**
     * update demande to terminer
     *
     * @param [type] $rowid_demande
     * @return void
     */
    function terminerDemande($rowid_demande)
    {
        global $mysqli;
        
        $requete = 'UPDATE demandes SET traitement_id=3 WHERE rowid=' . $rowid_demande;
        $result = $mysqli->query($requete);
        
    }


}
?>