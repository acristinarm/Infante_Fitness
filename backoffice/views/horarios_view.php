<?php 

$horarios = getHorarios();

?>


<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Horários</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <table>
            <tr>
                <th>Imagem</th>
                <th>Texto</th>
                <th>Ações</th>
            </tr>
            <tr>
                <td><img src="<?= $horarios["imagem"]; ?>" alt="Horário" style="height: 60px;"></td>
                <td><?= substr($horarios["texto"], 0, 80); ?> ... </td>
                <td>
                    <a href="horarios_editar.php?id=<?= $horarios["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>
        </table>
    </div>
</div>

</main>