<?php 
    session_start();
    $_SESSION['choix'] = $_GET['choix'];
    $_SESSION['nombreCarte'] = $_GET['nombreCarte'];
    header('Location:')
?>