<?php 

$hyrox = getIF_HYROX();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Hyrox Details</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <table>
            <tr>
                <th>Texto</th>
                <th>Tempo</th>
                <th>Descrição</th>
                <th>Nº Pessoas</th>
                <th>Ações</th>
            </tr>
            <tr>
                <td><?= $hyrox["texto"]; ?></td>
                <td><?= $hyrox["tempo"]; ?></td>
                <td><?= $hyrox["descricao"]; ?></td>
                <td><?= $hyrox["pessoas"]; ?></td>
                <td>
                    <a href="if_hyrox_editar.php?id=<?= $hyrox["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>
        </table>
    </div>
</div>

</main>
