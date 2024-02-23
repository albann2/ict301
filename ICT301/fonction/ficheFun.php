<?php
    require "./model/fiche.php";  

    function addEtudiant (Fiche $fiche){
        require_once "./connexion.inc.php";
        $insertion ="INSERT INTO fiche VALUES('".$fiche->get_numeroSeance()."','".$fiche->get_Salle()."')";
        $connexion -> exec($insertion);
    }

    function delFiche (Fiche $fiche){

    }

    function getAllFiche (){

    }
    
    function setFiche (Fiche $fiche){

    }

    function getOneFiche (Fiche $fiche){       
        require_once "./connexion.inc.php";
        $request=$connexion -> prepare("SELECT * FROM `fiche` WHERE `numeroSeance`='".$fiche->get_numeroSeance()."' AND `salle`='".$fiche->get_Salle()."'");
        $request -> execute();
        $resultat=$request -> fetchall();
        if(count($resultat)>0) return true;
        return false;
    }
?>