<?php

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação executada não executada!</div>';
    }
}


$resultados = '';
foreach ($pessoas as $pessoa) {
    $resultados .= '<tr>
                      <td>' . $pessoa->PES_ID . '</td>
                      <td>' . $pessoa->NOME . '</td>
                      <td>' . $pessoa->CPF . '</td>
                      <td>' . $pessoa->IDADE . '</td>
                      <td>' . $pessoa->TELEFONE . '</td>
                      <td>
                        <a href="editar.php?PES_ID=' .  $pessoa->PES_ID . ' "><button type="button" class="btn btn-primary">Editar</button></a>
                        <a href="excluir.php?PES_ID=' . $pessoa->PES_ID . ' "><button type="button" class="btn btn-danger">Excluir</button></a>
                      </td> 
                      </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
<td colspan="6" class="text-center">
    Nenhuma Pessoa encontrada
</td>
</tr>';
?>

<main>

    <?= $mensagem ?>

    <section>
        <a href="cadastrar.php"><button class="btn btn-success mt-3">Cadastrar</button></a>
        <a href="idade.php"><button class="btn btn-success mt-3" style="margin: 0px 15px;">Relátorio Simples</button></a>
        <a href="consultar.php"><button class="btn btn-success mt-3" style="margin: 0px 0px;">Média</button></a>
    </section>


    <section>
        <form method="get">
            <div class="row my-4">
                <div class="col">
                    <label>Buscar por CPF</label>
                    <input type="text" name="busca" class="form-control" value="<?= $busca ?>">
                </div>

                <div class="col d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filtrar</button>

                </div>


            </div>
        </form>
    </section>

    <section>
        <table class="table bg-light mt-3">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Idade</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>
        </table>
    </section>


</main>