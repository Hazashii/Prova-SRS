<?php

$resultadomin = '';
foreach ($menoridade as $menor) {
    $resultadomin .= '<tr>
                      <td>' . $menor->PES_ID . '</td>
                      <td>' . $menor->NOME . '</td>
                      <td>' . $menor->CPF . '</td>
                      <td>' . $menor->IDADE . '</td>
                      <td>' . $menor->TELEFONE . '</td>
                      <td>
                        <a href="editar.php?PES_ID=' . $menor->PES_ID . ' "><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?PES_ID=' . $menor->PES_ID . ' "><button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td> 
                      </tr>';
}

$resultadomax = '';
foreach ($maioridade as $maior) {
    $resultadomax .= '<tr>
                      <td>' . $maior->PES_ID . '</td>
                      <td>' . $maior->NOME . '</td>
                      <td>' . $maior->CPF . '</td>
                      <td>' . $maior->IDADE . '</td>
                      <td>' . $maior->TELEFONE . '</td>
                      <td>
                        <a href="editar.php?PES_ID=' . $maior->PES_ID . ' "><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?PES_ID=' . $maior->PES_ID . ' "><button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td> 
                      </tr>';
}

$resultadomed = '';
foreach ($mediaidade as $media) {
    $resultadomed .= '<tr>
                      <td>' . $media->AVG . '</td>
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
                <label for="">Menor Idade</label>
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
                <?= $resultadomin ?>
            </tbody>
        </table>
    </section>
    <hr>
    <section>
        <table class="table bg-light mt-3">

            <thead>
                <br>
                <label for="">Maior Idade</label>
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
                <?= $resultadomax ?>
            </tbody>
        </table>
    </section>
    <hr>

    <section>
        <table class="table bg-light mt-3">

            <thead>
                <br>
                <label for="">Média das Idades</label>
                <tr>
                    <th>Média Total</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultadomed ?>
            </tbody>
        </table>
    </section>


</main>