<?php
require 'conndb.php';
require 'security.php';

if (isset($_POST['save'])){
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'] && !empty($_POST['telephone']) && !empty($_POST['radio']))){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_n = $_POST['date_n'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $tut= explode(",", $_POST['tuteur']);
    $id_tuteur = $tut[2];
    $radio = $_POST['radio'];
// si l'etudiant a un tuteur
    if($radio == "true"){
        //verifier si l'etudiant existe deja
        $req = $bdd->prepare("SELECT * FROM etudiant WHERE email = ?");
        $req->execute(array($email));
        $user = $req->rowCount();
        if ($user==0) { // si l'email n'existe pas
            $req = $bdd->prepare("INSERT INTO etudiant(nom,prenom,date_n,email,telephone,id_tuteur) VALUES(?,?,?,?,?,?)");
            $req->execute(array($nom,$prenom,$date_n,$email,$telephone,$id_tuteur));
            $success_msg = "Etudiant avec tuteur ajouté avec succès";
            header("Location: ../pages/accueil.php?success_msg=  $success_msg ");
        }
        else{
            $error_msg = "L'Etudiant existe deja";
            header("Location: ../pages/accueil.php?error_msg= $error_msg");
        }
    }
   //si l'etudiant n'a pas de tuteur
    else{
        //verifier si l'etudiant existe deja
        $req = $bdd->prepare("SELECT * FROM etudiant WHERE email = ?");
        $req->execute(array($email));
        $user = $req->rowCount();
        if ($user==0) { // si l'email n'existe pas
            $req = $bdd->prepare("INSERT INTO etudiant(nom,prenom,date_n,email,telephone) VALUES(?,?,?,?,?)");
            $req->execute(array($nom,$prenom,$date_n,$email,$telephone));
                $success_msg = "Etudiant sans tuteur ajouté avec succès";
                header("Location: ../pages/accueil.php?success_msg= $success_msg");
        }
        else{
                $error_msg = "L'Etudiant existe deja";
                header("Location: ../pages/accueil.php?error_msg=$error_msg");
        }
    }      

}
else{
    $error_msg = "verifier vos champs";
    header("Location: ../pages/accueil.php?error_msg=  $error_msg");
}
}

?>