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
                <?php 
                    $manager=get_manager_courant($liste['dept_no']);    
                    $nbemploye= get_nbemployee_par_dept($liste['dept_no']);
                ?>
                <tr>
                    <td>
                        <a id="a" href="modele.php?page=listeemployerpardepartement&id_departement=<?php echo $liste['dept_no'];?>&nom=<?= $liste['dept_name'];?>">
                            <?= $liste['dept_name'];?>
                        </a>
                    </td>
                    <td><?= $manager['first_name'];?></td>
                    <td><?= $nbemploye['nombre_employee'] ;?></td>
                </tr>
            <?php }?>
        </table>
    </article>
</section>



