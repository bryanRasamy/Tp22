<?php 
    require(".././inc/fonctions.php");
    session_start();

    $departement=$_GET['departement'];
    $date=$_GET['date'];
    $id=$_GET['id'];

    changer_departement($id,$departement,$date);
    
    header("Location:modele.php?page=changerdepartement&id_employer=$id");
?>