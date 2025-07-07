<?php 

    $id_employer= $_GET['id_employer'];
    var_dump($id_employer);
?>
<div class="row">
    <section class="col-3 col-sm-3 col-3"></section>
    <section class="col-6 col-sm-6 col-6 border shadow modif reglage">
        <h3 class="text-center">DEVENIR MANAGER</h3>
        <form action="traitementManager.php" method="get" class="mt-4">
            <article>
                <p>Date de début:</p>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="date" class="form-control" name="datedebut" id="floatingInputGroup1" placeholder="date de debut">
                        <input type="hidden" name="id_employer" value="id_employer">
                    </div>
                </div>
            </article>
            <div class="d-grid gap-2 mt-4">
                <input type="submit" value="Changer en Manager" id="valider" class="btn btn-secondary">
            </div>
        </form>
</section>
</div>