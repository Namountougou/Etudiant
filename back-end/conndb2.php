<?php 
try{
    $bdd = new PDO('mysql:host=localhost;dbname=ufrsds;', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}
?>