<?php
    $id_departement=$_GET['id_departement'];
    $liste_employer=get_employer_par_departement($id_departement);
?>
<section>
    <article class="row">
        <h2 class="text-center">Liste des employer pour le departement <strong><?=$_GET['nom'];?></strong></h2>
    </article>
    <article class="row">
        <table border="1 px">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
            <?php foreach($liste_employer as $liste){ ?>
                <tr>
                    <td>
                        <a href="modele.php?page=ficheemployer&id_employer=<?php echo $liste['emp_no']?>">
                            <?= $liste['last_name'];?></td>
                        </a>
                    <td><?= $liste['first_name'];?></td>
                </tr>
            <?php }?>
        </table>
    </article>
    <article class="row mt-4">
        <a href="modele.php?page=listedepartements" type="button" class="btn btn-outline-danger">Retour</a>
    </article>
</section>

