<?php
require 'conndb.php';
if (isset($_POST['add_tuteur'])){
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
//verifier si le tuteur existe deja
$req = $bdd->prepare("SELECT * FROM tuteur WHERE telephone = ?");
$req->execute(array($telephone));
$user = $req->rowCount();
if ($user==0) { // si le tuteur n'existe pas
$req = $bdd->prepare("INSERT INTO tuteur(nom,prenom,email,telephone) VALUES(?,?,?,?)");
$req->execute(array($nom,$prenom,$email,$telephone));
$success_msg = "Tuteur ajouté avec succès";
header("Location: ../pages/accueil.php?success_msg=  $success_msg ");

}
else{ // si le tuteur existe
$error_msg = "Le tuteur existe deja";
header("Location: ../pages/accueil.php?error_msg= $error_msg");
}


}}

?>