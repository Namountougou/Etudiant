

<?php
require 'conndb.php';

if (isset($_POST['valider'])) {
  
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $cfpwd = $_POST['cfpwd'];

    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($pwd) && !empty($cfpwd)) {
   
        
          // verifier si l'email existe deja
            $req = $bdd->prepare("SELECT * FROM admine WHERE email = ?");
            $req->execute(array($email));
            $user = $req->rowCount();
            if ($user==0) { // si l'email n'existe pas
                $req = $bdd->prepare("INSERT INTO admine(nom,prenom,email,mdp) VALUES(?,?,?,?)");
                $req->execute(array($nom,$prenom,$email,$pwd));
                $_SESSION['auth'] = true;
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['email'] = $email;
                header('Location: ./pages/auth.php');}
            }
            else{
                $error_msg = "verifier vos champs";
            }
        }
?>