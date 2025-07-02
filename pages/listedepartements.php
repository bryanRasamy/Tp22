<?php
    $liste_departement=get_all_departement();
    
?>

<section>
    <article class="row">
        <h1>Liste des départements</h1>
    </article>
    <article class="row">
        <table border="1" class="table table-striped table-hover custom-blue-table">
            <tr>
                <th>Nom du departement</th>
                <th>Manager en cours</th>
                <th>Nombre d'employé</th>
            </tr>
            <?php foreach($liste_departement as $liste){ ?>
                <tr>
                    <td>
                        <a id="a" href="modele.php?page=listeemployerpardepartement&id_departement=<?php echo $liste['dept_no'];?>&nom=<?= $liste['dept_name'];?>">
                            <?= $liste['dept_name'];?>
                        </a>
                    </td>
                    <td><?= $liste['first_name'];?></td>
                    <td><?= $liste['nbr_employer'] ;?></td>
                </tr>
            <?php }?>
        </table>
    </article>
</section>



