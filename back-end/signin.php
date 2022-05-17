<?php
require 'conndb.php';
if (isset($_POST['connecter'])){
 //si les champs sont vides renvoyer une erreur du connect
 if(!empty($_POST['email']) && !empty($_POST['pwd'])){
        $email = $_POST['email'];
        $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

        $ifuserexist = $bdd->prepare("SELECT * FROM admine WHERE email = $email AND mdp = $pwd");
        $userexist = $ifuserexist->rowCount();
        if ($userexist == 1) {
            session_start();
            $_SESSION['auth'] = true;
            $conn = $_SESSION['auth'];
            $_SESSION['email'] = $email;
            header('Location: ../pages/accueil.php');
        } else {
            $error_msg = "verifier vos champs";
            header('Location: ../pages/auth.php?error_msg=' . $_error_msg);  
            
        }
    }
   
    else{
        $error_msg = "verifier vos champs";
            header('Location: ../pages/auth.php?error_msg=' . $_error_msg );     
    
  


}
}
