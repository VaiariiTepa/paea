<?php
//Connexion à la base de données
include __DIR__ . '/../bdd/connexion_bd.php';

class paea
{
    /**
     * Get All Service
     *
     * @return void
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
     * @return void
     */
    function newHabitant($nom,$prenom,$birthday,$tel,$adresse)
    {
        global $mysqli;
        
        $request = "INSERT INTO `habitants`(`nom`, `prenom`, `birthday`, `tel`, `adresse`)"; 
        $request.= "VALUES";
        $request.= "('".$nom."','".$prenom."','".$birthday."','".$tel."','".$adresse."')";
        $result = $mysqli->query($request);
        
    }
    
    function newDemande($LastHabitantId,$serviceId,$remarque,$traitement)
    {
        global $mysqli;
        
        var_dump('avant la requete');
        
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

        var_dump('apres la requete');
        
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
        $result = $mysqli->query($requete);
        
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


    function getLangues()
    {
        //APPELER LA BASE DE DONNEE
        global $mysqli;
        $t_langues = array();
        
        //POINTER DANS LA TABLE POUR UNE BOUCLE//
        $requete = "SELECT *
				FROM hello";
        $result = $mysqli->query($requete);
        
        //--DEBUT DE LA BOUCLE--CODE QUI RECEPTIONNE LE TABLEAU--fetch_row//
        while ($row = $result->fetch_row()) {
            $t_langues[] = $row;
        }


        //--le resultat s'arrète a return et retourne vers le haut,
        //--tous ce qui est après return n'est pas pris en compte,
        return $t_langues;
    }


//Crée une langue dans la BD premier
    function createLangue($langue, $traduction)
    {
        //APPELER LA BASE DE DONNEE
        global $mysqli;
        //REQUETTE SQL - CREATION DANS LA BD
        $requete = "INSERT INTO hello(langue, traduction) VALUES
				('" . $langue . "','" . $traduction . "')";
        $result = $mysqli->query($requete);
        //RETOUR DU RESULTAT, TOUS CE QUI EST APRES NE SERA PAS PRIT EN COMPTE
        return $result;
    }

//Supprime une langue dans la BD
    function deleteLangue($rowid)
    {
        //POINTER DANS LA BASE DE DONNEE
        global $mysqli;
        //REQUETTE SQL - SUPPRIME UNE LANQUE DANS LA BD
        $requete = "DELETE FROM hello WHERE rowid=" . $rowid;
        $result = $mysqli->query($requete);
        //RETOUR DU RESULTAT, TOUS CE QUI EST APRES NE SERA PAS PRIT EN COMPTE
        return $result;
    }


//modifier la langue dans la BD
    function updateLangue($rowid, $newLangue, $newTraduction)
    {
        //POINTER DANS LA BASE DE DONNEE
        global $mysqli;
        //REQUETTE SQL - MODIFICATION
        $requete = 'UPDATE hello SET langue="' . $newLangue . '",traduction="' . $newTraduction . '" WHERE rowid=' . $rowid;
        $result = $mysqli->query($requete);
        //RETOUR DU RESULTAT, TOUS CE QUI EST APRES NE SERA PAS PRIT EN COMPTE
        return $result;
    }
}
?>