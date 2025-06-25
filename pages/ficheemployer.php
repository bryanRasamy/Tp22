<?php 
    $fiche_employer=get_fiche_employer($_GET['id_employer']);
    $historique=get_historique_salaire($_GET['id_employer']);
?>
<section>
    <article class="row">
        <h2 class="text-center">Fiche de <strong><?=$fiche_employer['last_name']?> <?=$fiche_employer['first_name']?> </strong></h2>
    </article>
    <article class="row">
        <table border="1 px">
            <tr>
                <th>Nom</th>
                <td><?= $fiche_employer['last_name'];?></td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td><?= $fiche_employer['first_name'];?></td>
            </tr>
            <tr>
                <th>Date de naissance</th>
                <td><?= $fiche_employer['birth_date'];?></td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td><?= $fiche_employer['gender'];?></td>
            </tr>
            <tr>
                <th>Date d'embauche</th>
                <td><?= $fiche_employer['hire_date'];?></td>
            </tr>
        </table>
    </article>
</section>
<section class="row mt-5">
    <article class="row">
        <h2 class="text-center">Historique des salaires de <strong><?=$fiche_employer['last_name']?> <?=$fiche_employer['first_name']?> </strong></h2>
    </article>
    <article class="row">
        <table border="1 px">
            <tr>
                <th>Emploie</th>
                <th>Salaires</th>
                <th>Date de debut</th>
                <th>Date de fin</th>
            </tr>
            <?php foreach($historique as $histo){ ?>
                <tr>
                    <td><?= $histo['title'];?></td>
                    <td><?= $histo['salary'];?></td>
                    <td><?= $histo['from_date'];?></td>
                    <td><?= $histo['to_date'];?></td>
                </tr>
            <?php }?>
        </table>
    </article>
</section>