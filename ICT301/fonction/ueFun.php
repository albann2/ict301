<?php
    require "./model/ue.php";  

    function addUE (UE $ue){
        require_once "./connexion.inc.php";
        $insertion ="INSERT INTO ue VALUES('".$etudiant->get_code()."','".$etudiant->get_libelle()."','".$etudiant->get_classe()."')";
        $connexion -> exec($insertion);
    }

    function delUE (UE $ue){

    }

    function getAllUE (){

    }
    
    function setUE (UE $ue){

    }

    function getOneUE (UE $ue){       
        require_once "./connexion.inc.php";
        $request=$connexion -> prepare("SELECT * FROM `ue` WHERE `code`='".$etudiant->get_code()."' AND `libelle`='".$etudiant->get_libelle()."'");
        $request -> execute();
        $resultat=$request -> fetchall();
        if(count($resultat)>0) return true;
        return false;
    }
?>