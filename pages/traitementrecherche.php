<?php 
    require(".././inc/fonctions.php");
    session_start();

    if(!isset($_GET['a'])){
        $_SESSION['nom']=$_GET['nom'];
        $_SESSION['departement']=$_GET['departement'];
        $_SESSION['min']=$_GET['min'];
        $_SESSION['max']=$_GET['max'];
        $_SESSION['page']=1;
    }else{
        $_SESSION['page']=$_GET['pages'];
    }

    $nom=$_SESSION['nom'];
    $departement=$_SESSION['departement'];
    $min=$_SESSION['min'];
    $max=$_SESSION['max'];
    $page=$_SESSION['page'];
    $limite=(($page-1)*20);
    

    $reponse=get_all_recherche($departement,$nom,$min,$max,$limite);
    $nbr_recherche=count($reponse);

    $_SESSION['nbr']=$nbr_recherche;
    $_SESSION['reponse']=$reponse;
    header("Location:modele.php?page=resultatrecherche&pages=$page");
?>