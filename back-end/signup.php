

<?php
include './conndb.php';

if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $cfpwd = $_POST['cfpwd'];

    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($pwd) && !empty($cfpwd)) {
        if ($pwd == $cfpwd) {
            $ifUserexist=$bdd->prepare("SELECT * FROM admini WHERE email=?");
            $ifUserexist->execute(array($email));
            $userexist=$ifUserexist->fetch();
            if ($userexist->rowCount()==0) {
                $insert=$bdd->prepare("INSERT INTO admini (nom,prenom,email,pwd) VALUES(?,?,?,?)");
                $insert->execute(array($nom,$prenom,$email,$pwd));

                header("location:../pages/auth.php");
                
            }else{
                $error_msg="L'utilisateur existe deja";
            }
        }else{
            $error_msg="les mots de passe ne sont pas identiques";
        }
    }else{
        $error_msg="veuillez remplir tous les champs";
    }
}
?>