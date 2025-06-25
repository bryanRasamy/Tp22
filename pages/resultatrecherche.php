<?php 
    $recherche=$_SESSION['reponse'];
?>
<section class="row">
    <article class="row">
        <table border="1">
            <tr>
                <td>Departement</td>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Date de naissance</td>
            </tr>
            <?php foreach( $recherche as $ligne) { ?>
                <tr>
                    <td> <?php echo $ligne['dept_name']; ?></td>
                    <td> <?php echo $ligne['last_name'];?></td>
                    <td> <?php echo $ligne['first_name']; ?></td>
                    <td> <?php echo $ligne['birth_date']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </article>
</section>