<div class="row">
    <section class="col-3 col-sm-3 col-3"></section>
    <section class="col-6 col-sm-6 col-6 border shadow modif reglage">
        <h3 class="text-center">Recherche</h3>
        <form action="traitement.php" method="get" class="mt-4">
            <article>
                <p>Departement:</p>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="nom" id="floatingInputGroup1" placeholder="Entrer le nom du departement">
                        <label for="floatingInputGroup1">Departement</label>
                    </div>
                </div>
            </article>

            <article>
                <p>Nom de l'employer:</p>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="nom" id="floatingInputGroup1" placeholder="Entrer le nom de l'employer">
                        <label for="floatingInputGroup1">Nom de l'employer</label>
                    </div>
                </div>
            </article>

            <article>
                <p>Age minimum de l'employer:</p>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control" name="min" id="floatingInputGroup1" placeholder="Entrer l'age min" min="15" max="80">
                        <label for="floatingInputGroup1">Age min</label>
                    </div>
                </div>
            </article>

            <article>
                <p>Age maximum de l'employer:</p>
                <div class="input-group mb-3">
                    <div class="form-floating">
                        <input type="number" class="form-control" name="min" id="floatingInputGroup1" placeholder="Entrer l'age max" min="15" max="80">
                        <label for="floatingInputGroup1">Age max</label>
                    </div>
                </div>
            </article>

            <div class="d-grid gap-2 mt-4">
                <input type="submit" value="Rechercher" id="valider" class="btn btn-secondary">
            </div>
        </form>
</section>
</div>