<?php
    require "./model/etudiant.php";  

    function addEtudiant (Etudiant $etudiant){
        require_once "./connexion.inc.php";
        $insertion ="INSERT INTO etudiant VALUES('".$etudiant->get_matricule()."','".$etudiant->get_name()."','".$etudiant->get_statut()."','".$etudiant->get_password()."')";
        $connexion -> exec($insertion);
    }

    function delEtuidant (Etudiant $etudiant){

    }

    function getAllEtudiant (){

    }
    
    function setEtudiant (Etudiant $etudiant){

    }

    function getOneEtudiant (Etudiant $etudiant){       
        require_once "./connexion.inc.php";
        $request=$connexion -> prepare("SELECT * FROM `etudiant` WHERE `matricule`='".$etudiant->get_matricule()."' AND `password`='".$etudiant->get_password()."'");
        $request -> execute();
        $resultat=$request -> fetchall();
        if(count($resultat)>0) return true;
        return false;
    }
?>