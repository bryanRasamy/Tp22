<?php 
    $recherche=$_SESSION['reponse'];
?>
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
</section>