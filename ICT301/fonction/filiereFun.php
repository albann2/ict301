<?php
    require "./model/filiere.php";  

    function addUE (Filiere $filiere){
        require_once "./connexion.inc.php";
        $insertion ="INSERT INTO filiere VALUES('".$filiere->get_code()."','".$filiere->get_nom()."')";
        $connexion -> exec($insertion);
    }

    function delFiliere (Filiere $filiere){

    }

    function getAllFiliere (){

    }
    
    function setFiliere (Filiere $filiere){

    }

    function getOneFiliere (Filiere $filiere){       
        require_once "./connexion.inc.php";
        $request=$connexion -> prepare("SELECT * FROM `filiere` WHERE `code`='".$filiere->get_code()."' AND `nom`='".$filiere->get_nom()."'");
        $request -> execute();
        $resultat=$request -> fetchall();
        if(count($resultat)>0) return true;
        return false;
    }
?>