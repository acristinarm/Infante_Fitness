<?php 

$daily = getIF_DAILY();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Daily Details</h3>
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
                <th>Ações</th>
            </tr>
            <tr>
                <td><?= $daily["texto"]; ?></td>
                <td><?= $daily["tempo"]; ?></td>
                <td><?= $daily["descricao"]; ?></td>
                <td><?= $daily["pessoas"]; ?></td>
                <td>
                    <a href="if_daily_editar.php?id=<?= $daily["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>
        </table>
    </div>
</div>

</main>
