

<?php

include 'back-end/conndb.php';
if (isset($_POST['valider'])) {

    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
        $cfpwd = $_POST['cfpwd'];



        $ifUserexist = $bdd->prepare("SELECT * FROM admine WHERE email=?");
        $ifUserexist->execute(array($email));

        if ($ifUserexist->rowCount() == 0) {
            $insert = $base->prepare("INSERT INTO admine (nom,prenom,email,pwd) VALUES(?,?,?,?)");
            $insert->execute(array($nom, $prenom, $email, $pwd));
           

            $getInfo = $base->prepare("SELECT nom,prenom,email FROM admine WHERE nom=?" and "prenom=?" and "email=?");
            $getInfo->execute(array($nom, $prenom, $email));
            $info = $getInfo->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['nom'] = $info['nom'];
            $_SESSION['prenom'] = $info['prenom'];
            $_SESSION['email'] = $info['email'];
            header('Location: ../index.php');
        } else {
            $error_msg = "L'utilisateur existe deja";
        }
    } else {
        $error_msg = "veuillez remplir tous les champs";
    }
}
?>