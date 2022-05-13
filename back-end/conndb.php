<?php 
try{
    session_start();
    $base = new PDO('mysql:host=localhost;dbname=ufrsds;', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

?>