<?php
//si $_SESSION['auth'] est fausse renvoyer sur la page d'authentification
if (!isset($_SESSION['auth'])) {
    header('Location: ../pages/auth.php');
}
?>