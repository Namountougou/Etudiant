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

    $veriftut = $bdd->prepare("SELECT id_tuteur FROM etudiant WHERE email = ?");
    $veriftut->execute(array($email));
    $vtut = $veriftut->fetch();
    $id_tut = $vtut['id_tuteur'];
    if($id_tut == $id_tuteur){
        
    $error_msg = "Tuteur non valide";
    header('Location: ../pages/accueil.php?error_msg='. $error_msg);
    }
    else{


    $radio = $_POST['radio'];
    if($radio == "true"){
        $req = $bdd->prepare("SELECT * FROM etudiant WHERE email = ? AND id_tuteur = ?");
        $req->execute(array($email, $id_tuteur));
        $user = $req->rowCount();
        if ($user==0) { 
            $req = $bdd->prepare("INSERT INTO etudiant(nom,prenom,date_n,email,telephone,id_tuteur) VALUES(?,?,?,?,?,?)");
            $req->execute(array($nom,$prenom,$date_n,$email,$telephone,$id_tuteur));
            $success_msg = "Etudiant avec tuteur ajouté avec succès";
            header('Location: ../pages/accueil.php?success_msg= '. $success_msg);
        }
        else{
            $error_msg = "L'Etudiant existe deja";
            header('Location: ../pages/accueil.php?error_msg='. $error_msg);
        }
    }
    else{
        $req = $bdd->prepare("SELECT * FROM etudiant WHERE email = ?");
        $req->execute(array($email));
        $user = $req->rowCount();
        if ($user==0) { 
            $req = $bdd->prepare("INSERT INTO etudiant(nom,prenom,date_n,email,telephone) VALUES(?,?,?,?,?)");
            $req->execute(array($nom,$prenom,$date_n,$email,$telephone));
                $success_msg = $id_tut;
                header("Location: ../pages/accueil.php?success_msg= $success_msg");
        }
        else{
                $error_msg = "L'Etudiant existe deja";
                header("Location: ../pages/accueil.php?error_msg=$error_msg");
        }
        
    }
    
        }    

} else {

        $error_msg = "Tuteur inexistant";
        header("Location: ../pages/accueil.php?error_msg=$error_msg");
    }  

}

?>