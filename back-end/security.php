<?php
//si $_SESSION['auth'] est fausse renvoyer sur la page d'authentification
if (!$conn) {
    header('Location: ../pages/auth.php');
}
?>