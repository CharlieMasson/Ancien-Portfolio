<?php 

if(isset($_POST['submit'])){
    if(isset($_POST['identifiant']) and !empty($_POST['identifiant'])){

        if(isset($_POST['mdp']) and !empty($_POST['mdp'])){

            require "server.php";

            $password= sha1($_POST['mdp']);

            $getdata = $pdo->prepare('SELECT email FROM admin WHERE email=? and motDePasse=?');
            $getdata->execute(array($_POST['identifiant'], $password));

            $rows = $getdata->rowCount();

            if($rows==true){
                session_start();
                $_SESSION["connect"] = true;
                //setcookie('connect','true',time()+3600);
                header("Location: dashboard.php");
            }
            else{
                $erreur ="Identifiant ou mot de passe inconnue";
            }

        }
        else{
            $erreur = "Veuillez saisir votre mot de passe";
        }
    }
    else{
        $erreur = 'Veuillez saisir un identifiant';
    }

}


?>