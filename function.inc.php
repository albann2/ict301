<?php
    function login(){
        require('./fonction/etudiantFun.php');
        if (isset($_POST['submit2'])) {
            extract($_POST);
            $etudiant = new Etudiant("",$matricule,"",$password);
            $bool = getOneEtudiant($etudiant);
            if($bool == true){
                $_SESSION['etu']=$etudiant;
                header('Location:user/home.php');
            }
            else{
                echo "<br><br><p style='color:red;'>Veuillez verifier vos entres.</p>";
            }
        }else if(isset($_POST['submit2'])){
            /*extract($_POST);
            $request=$connexion -> prepare("SELECT * FROM `enseignant` WHERE `username`='$id' AND `password`='$pas' AND `statut`='1'");
            $request -> execute();
            $resultat=$request -> fetchall();
            loginAdmin($id, $pas, $resultat);*/
        }
    }
?>