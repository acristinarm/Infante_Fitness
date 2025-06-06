<?php 

$socios = getSocios();

?>


<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Sócios</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <table>
            <tr>
                <th>Título</th>
                <th>Texto</th>
                <th>Ações</th>
            </tr>
            <tr>
                <td><?= $socios["título"]; ?></td>
                <td><?= substr($socios["texto"], 0, 80); ?> ... </td>
                <td>
                    <a href="socios_editar.php?id=<?= $socios["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>
        </table>
    </div>
</div>

</main>