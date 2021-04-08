<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success mt-3">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE ?></h2>

    <form action="" method="post">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $obPessoa->NOME ?>">
        </div>

        <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control" name="cpf" value="<?= $obPessoa->CPF ?>">
        </div>

        <div class="form-group">
            <label>Idade</label>
            <input type="text" class="form-control" name="idade" value="<?= $obPessoa->IDADE ?>">
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" class="form-control" name="telefone" value="<?= $obPessoa->TELEFONE ?>">
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>


    </form>
</main>