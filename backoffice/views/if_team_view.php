<?php 

$team = getIF_TEAM();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Team Details</h3>
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
                <td><?= $team["texto"]; ?></td>
                <td><?= $team["tempo"]; ?></td>
                <td><?= $team["descricao"]; ?></td>
                <td><?= $team["pessoas"]; ?></td>
                <td>
                    <a href="if_team_editar.php?id=<?= $team["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>
        </table>
    </div>
</div>

</main>
