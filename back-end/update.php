 <?php if (isset($_POST['add_tuteur'])) {
        require 'conndb.php';
        $id= $_GET['id'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $date_n = $_POST['date_n'];
 $email = $_POST['email'];
 $telephone = $_POST['telephone'];
 $id_tuteur = $_POST['id_tuteur'];
 $update = $bdd->prepare("UPDATE etudiant SET nom = '$nom', prenom = '$prenom', date_n = '$date_n', email = '$email', telephone = '$telephone', id_tuteur = '$id_tuteur' WHERE id = $id");
 $update->execute();
 $success = "L'étudiant a été modifié avec succès";
 header("location:../pages/liste.php?success_msg= $success_msg");
 }
 
 ?>