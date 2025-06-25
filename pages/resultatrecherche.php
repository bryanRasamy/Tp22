<section>
    <?php if(isset($_SESSION[''])) {?>
        <?php $recherche = $_SESSION['']; ?>
            <article class="row">
                <table border="1" cellspacing="0" cellpadding="9">
                    <tr>
                        <td>Departement</td>
                        <td>Nom</td>
                        <td>Prenom</td>
                        <td>Age</td>
                    </tr>
                    <?php foreach( $ligne as $recherche) { ?>
                    <tr>
                        <td> <?php echo $ligne['']; ?></td>
                        <td> <?php echo $ligne[''];?></td>
                        <td> <?php echo $ligne['']; ?></td>
                        <td> <?php echo $ligne['']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </article>
    <?php } ?>
</section>