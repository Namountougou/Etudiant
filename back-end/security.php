<?php

//si $_SESSION['auth'] est fausse renvoyer sur la page d'authentification
session_start();
if (!isset($_SESSION['auth'])) {
    header('Location: ../pages/auth.php');
}
?>