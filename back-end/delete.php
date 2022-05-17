<?php
require 'conndb.php';
$_GET['id'];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $reponse = $bdd->prepare("DELETE FROM etudiant WHERE id = :id");
    $reponse->execute(array('id' => $id));
    $success_msg = "Etudiant supprimé avec succès";
    header('location:../pages/liste.php?success_msg=' . $success_msg);
}

?>