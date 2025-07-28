<?php 

$pt = getIF_PT();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>PT Details</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <table>
            <tr>
                <th>Texto</th>
                <th>Tempo</th>
                <th>Descrição</th>
                <th>Pessoas</th>
                <th>Vezes/ Semana</th>
                <th>Ações</th>
            </tr>
            <tr>
                <td><?= $pt["texto"]; ?></td>
                <td><?= $pt["tempo"]; ?></td>
                <td><?= $pt["descricao"]; ?></td>
                <td><?= $pt["pessoas"]; ?></td>
                <td><?= $pt["assiduidade"]; ?></td>
                <td>
                    <a href="if_pt_editar.php?id=<?= $pt["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>
        </table>
    </div>
</div>

</main>
