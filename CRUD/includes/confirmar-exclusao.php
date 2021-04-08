<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success mt-3">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Exlcuir Pessoa</h2>

    <form action="" method="post">

        <div class="form-group">
            <p>Você deseja realmente excluir esta pessoa? <strong><?= $obPessoa->NOME ?></strong></p>
        </div>

        <div class="form-group ">
            <a href="index.php"><button type="button" class="btn btn-success">Cancelar</button></a>

            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>

    </form>
</main>