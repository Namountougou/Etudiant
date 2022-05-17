

<?php
require 'conndb.php';

if (isset($_POST['valider'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['cfpwd'])) {
        if ($_POST['pwd'] == $_POST['cfpwd']) {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $pwd = md5($_POST['pwd']);
            $cfpwd = $_POST['cfpwd'];

            // verifier si l'email existe deja
            $req = $bdd->prepare("SELECT * FROM admine WHERE email = ?");
            $req->execute(array($email));
            $user = $req->rowCount();
            if ($user == 0) { // si l'email n'existe pas
                $req = $bdd->prepare("INSERT INTO admine(nom,prenom,email,mdp) VALUES(?,?,?,?)");
                $req->execute(array($nom, $prenom, $email, $pwd));
                header('Location: ../pages/auth.php');
            }
        } else {
            $error_msg = "Compte existant";
            header('Location: ../index.php?error_msg=' . $error_msg);
        }
        

    } 
    else {
        $error_msg = "Remplir tous les champs";
        header('Location: ../index.php?error_msg=' . $error_msg);
    }
}


?>