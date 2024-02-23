<?php
    require "./model/classe.php";  

    function addClasse (Classe $classe){
        require_once "./connexion.inc.php";
        $insertion ="INSERT INTO classe VALUES('".$classe->get_niveau()."')";
        $connexion -> exec($insertion);
    }

    function delClasse (Classe $classe){

    }

    function getAllClasse (){

    }
    
    function setClasse (Classe $classe){

    }

    function getOneClasse (Classe $classe){       
        require_once "./connexion.inc.php";
        $request=$connexion -> prepare("SELECT * FROM `classe` WHERE `niveau`='".$classe->get_niveau()."'");
        $request -> execute();
        $resultat=$request -> fetchall();
        if(count($resultat)>0) return true;
        return false;
    }
?>