<?php 
    require(".././inc/fonctions.php");
    session_start();

    $nom=$_GET['nom'];
    $departement=$_GET['departement'];
    $min=$_GET['min'];
    $max=$_GET['max'];

    $limite=0;

    $reponse=get_all_recherche($departement,$nom,$min,$max,$limite);
    $_SESSION['reponse']=$reponse;
    header('Location:modele.php?page=resultatrecherche');
?>