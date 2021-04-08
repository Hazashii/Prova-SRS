<?php

$resultado = '';
foreach ($pessoas as $pessoa) {
    $resultado .= '<tr>
                      <td>' . $pessoa->PES_ID . '</td>
                      <td>' . $pessoa->NOME . '</td>
                      <td>' . $pessoa->CPF . '</td>
                      <td>' . $pessoa->IDADE . '</td>
                      <td>' . $pessoa->TELEFONE . '</td>
                      <td>
                        <a href="editar.php?PES_ID=' . $pessoa->PES_ID . ' "><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?PES_ID=' . $pessoa->PES_ID . ' "><button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td> 
                      </tr>';
}

$resultado = strlen($resultado) ? $resultado : '<tr>
<td colspan="6" class="text-center">
    Nenhuma Pessoa encontrada
</td>
</tr>';

$resultadocount = '';
foreach ($total as $t) {
    $resultadocount .= '<tr>
                      <td>' . $t->COUNT . '</td>
                      <td>           
                      </td> 
                      </tr>';
}

?>

<main>

    <section>
        <a href="index.php"><button class="btn btn-success mt-3">Voltar</button></a>
    </section>

    <section>
        <table class="table bg-light mt-3">

            <thead>
                <br>
                <label for="">Pessoas com Idade</label>
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
                <?= $resultado ?>
            </tbody>
        </table>
    </section>
    <hr>

    <section>
        <table class="table bg-light mt-3">

            <thead>
                <br>
                <label for="">Total de Pessoas cadastradas</label>
                <tr>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultadocount ?>
            </tbody>
        </table>
    </section>


</main>