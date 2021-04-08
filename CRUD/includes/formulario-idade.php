<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success mt-3">Voltar</button>
        </a>
    </section>

    <section>
        <form method="get">
            <div class="row my-4">
                <div class="col">
                    <label>Buscar por Idade</label>
                    <input type="text" name="pidade" class="form-control" value="<?= $busca2 ?>">
                </div>

                <div class="col d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </form>
    </section>
</main>