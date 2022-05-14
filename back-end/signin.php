<?php
require 'conndb.php';
if (isset($_POST['connecter'])){
 //si les champs sont vides renvoyer une erreur du connect
 if(empty($_POST['email']) && empty($_POST['pwd'])){
     header('Location: ../pages/auth.php');
     $error_msg = "verifier vos champs";}
    else{
        $email= $_POST['email'];
        $pwd = $_POST['pwd'];

        $ifuserexist= $bdd->prepare("SELECT * FROM admine WHERE email = ? AND mdp = ?");
        $ifuserexist->execute(array($email,$pwd));
        $userexist=$ifuserexist->rowCount(); 
        if($userexist==1){
            $_SESSION['auth'] = true;
            $conn=$_SESSION['auth'];
            $_SESSION['email'] = $email;
            header('Location: ../pages/connexion.php');

 }
    else{
        $error_msg = "verifier vos champs";
            header('Location: ../pages/auth.php?error_msg="' . $error_msg . '"');
        
    }
  


}
}




?>