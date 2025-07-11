<?php 
    $fiche_employer=get_fiche_employer($_GET['id_employer']);
    $departement=get_tous_les_departements($_GET['id_employer']);
?>
<div class="row">
    <section class="col-3 col-sm-3 col-3"></section>
    <section class="col-6 col-sm-6 col-6 border shadow modif reglage">
        <h3 class="text-center">Changer de departement</h3>
        <h4 class="mt-4">Departement actuel: <?php echo $fiche_employer['dept_name'];?></h4>
        <h4 class="mt-4">Date de debut: <?php echo $fiche_employer['from_date'];?></h4>
        <form action="traitementchangerdepartement.php" method="get" class="mt-5">
            <article>
                <p>Departement:</p>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" name="departement">
                            <option selected>Departements</option>
                            <?php foreach($departement as $dep){?>
                                <option value="<?php echo $dep['dept_no'];?>"><?php echo $dep['dept_name'];?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </article>

            <article>
                <p>Date de debut:</p>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="Date" class="form-control" name="date" id="floatingInputGroup1" placeholder="Entrer la date de debut" value="<?php echo $fiche_employer['from_date'];?>" required min="<?php echo $fiche_employer['from_date'];?>">
                        <label for="floatingInputGroup1">Date de debut</label>
                    </div>
                </div>
            </article>

            <input type="hidden" name="id" value="<?php echo $_GET['id_employer'];?>">

            <div class="d-grid gap-2 mt-4">
                <input type="submit" value="Changer departement" id="valider" class="btn btn-secondary">
            </div>
        </form>
    </section>
</div>