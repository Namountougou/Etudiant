<?php
require 'conndb.php';
if (isset($_POST['connecter'])){
 //si les champs sont vides renvoyer une erreur du connect
 if(!empty($_POST['email']) && !empty($_POST['pwd'])){
        $email = $_POST['email'];
        $pwd = md5($_POST['pwd']);

        $req = $bdd->prepare("SELECT * FROM admine WHERE email = ? AND mdp = ?");
        $req->execute(array($email, $pwd));
        $user = $req->rowCount();
        if ($user != null) {
            session_start();
            $_SESSION['auth'] = true;
            $_SESSION['email'] = $email;
            header('Location: ../pages/accueil.php');
        } else {
            $error_msg = "Données incorrectes";
            header('Location: ../pages/auth.php?error_msg=' . $error_msg);
        }
    }
    else{
        $error_msg = "Remplir tous les champs";
        header('Location: ../pages/auth.php?error_msg=' . $error_msg);
    }
}
?>

