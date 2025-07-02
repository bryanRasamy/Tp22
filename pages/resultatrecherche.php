<?php 
    $recherche=$_SESSION['reponse'];
    $nbr_recherche=$_SESSION['nbr'];
?>
<?php if(!empty($recherche)){?>
    <section class="row">
        <article class="row">
            <table border="1" class="table table-striped table-hover custom-striped-tab">
                <tr>
                    <td>Departement</td>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Age</td>
                </tr>
                <?php foreach( $recherche as $ligne) { ?>
                    <tr>
                        <td> <?php echo $ligne['dept_name']; ?></td>
                        <td> <?php echo $ligne['last_name'];?></td>
                        <td> <?php echo $ligne['first_name']; ?></td>
                        <td> <?php echo $ligne['age']; ?> ans</td>
                    </tr>
                <?php } ?>
            </table>
        </article>
        <article class="row mt-5">
            <?php if($_GET['pages']!=1){?>
                <section class="col-2 col-lg-2 col-sm-2">
                    <a href="traitementrecherche.php?a=1&pages=<?php echo $_GET['pages']-1;?>" type="button" class="btn btn-outline-success">Precedant</a>
                </section>
            <?php }?>

            <?php if($nbr_recherche==20){?>
                <section class="col-4 col-lg-4 col-sm-4">
                    <a href="traitementrecherche.php?a=1&pages=<?php echo $_GET['pages']+1;?>" type="button" class="btn btn-outline-danger">Suivant</a>
                </section>           
            <?php }?>
        </article>
    </section>
<?php }else{?>
    <section class="row">
        <h1 class="text-center">Pas de resultat</h1>
        <article class="col-2 col-lg-2 col-sm-2">
            <a href="modele.php?page=recherche" type="button" class="btn btn-outline-danger">Retour</a>
        </article>
    </section>
<?php }?>