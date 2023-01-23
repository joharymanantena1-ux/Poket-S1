<?php 
    include('fonction.php');
    include('data.php');
    session_start();
    $_SESSION['choix'] = $_GET['choix'];
    $nbCarte = $_GET['nombreCarte'];
    $j1 = array();
    $j2 = array();

    $lesDeux = array();
    $lesDeux = distribuer($nbCarte, $j1, $j2, $carte);
    $j1 = $lesDeux[0];
    $j2 = $lesDeux[1];
    $_SESSION['j1'] = $j1;
    $_SESSION['j2'] = $j2;
    header('Location:afficher.php');
    
?>
