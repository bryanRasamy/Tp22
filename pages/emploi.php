<?php
    // $liste_emploi=get_all_emploi();
?>

<section>
    <article class="row">
        <h1>Liste des emplois</h1>
    </article>
    <article class="row">
        <table border="1" class="table table-striped table-hover custom-blue-table">
            <tr>
                <th>Emploi</th>
                <th>Nombre d'employer homme</th>
                <th>Nombre d'employer femme</th>
                <th>Salaire moyenne</th>
            </tr>
            <?php foreach($liste_emploi as $liste){ ?>
                <?php 
                    // $nbr_employer_homme=get_nbr_employer_par_emploi($liste[''],"M");
                    // $nbr_employer_femme=get_nbr_employer_par_emploi($liste[''],"F");    
                    // $salaire=get_salaire_moyen_par_emploi($liste['']);
                ?>
                <tr>
                    <td> <?= $liste[''];?></td>
                    <td><?= $nbr_employer_homme[''];?></td>
                    <td><?= $nbr_employer_femme[''];?></td>
                    <td><?= $salaire[''];?></td>
                </tr>
            <?php }?>
        </table>
    </article>
</section>