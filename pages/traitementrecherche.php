<?php 
    require(".././inc/fonctions.php");
    session_start();

    if(!isset($_GET['a'])){
        $_SESSION['nom']=$_GET['nom'];
        $_SESSION['departement']=$_GET['departement'];
        $_SESSION['min']=$_GET['min'];
        $_SESSION['max']=$_GET['max'];
        $_SESSION['limite']=0;
    }else{
        if($_GET['a']==1){
            if($_SESSION['limite']>0){
                $_SESSION['limite']=$_SESSION['limite']-20;
            }
        }else{
            $_SESSION['limite']=$_SESSION['limite']+20;
        }
    }

    $nom=$_SESSION['nom'];
    $departement=$_SESSION['departement'];
    $min=$_SESSION['min'];
    $max=$_SESSION['max'];
    $limite=$_SESSION['limite'];
    

    $reponse=get_all_recherche($departement,$nom,$min,$max,$limite);
    $_SESSION['reponse']=$reponse;
    header('Location:modele.php?page=resultatrecherche');
?>