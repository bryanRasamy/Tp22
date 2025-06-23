<?php
    // $id_departement=$_GET['id_departement'];
    $id_departement="d003";
    $liste_employer=get_employer_par_departement($id_departement);
?>
<section>
    <article class="row">
        <h2>Liste des employer pour le departement ...</h2>
    </article>
    <article class="row">
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
                <th>Hire date</th>
            </tr>
            <?php foreach($liste_employer as $liste){ ?>
                <tr>
                    <td><?= $liste['last_name'];?></td>
                    <td><?= $liste['first_name'];?></td>
                    <td><?= $liste['birth_date'];?></td>
                    <td><?= $liste['gender'];?></td>
                    <td><?= $liste['hire_date'];?></td>
                </tr>
            <?php }?>
        </table>
    </article>
    <article class="row">
        <a href="modele.php?page=listedepartements">Retour</a>
    </article>
</section>

