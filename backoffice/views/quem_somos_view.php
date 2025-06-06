<?php 

$quem_somos = getQuemSomos();

?>


<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Quem Somos</h3>
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
                <td>
                    <img src="<?= $quem_somos["imagem"]; ?>" alt="<?= $quem_somos["imagem"]; ?>" width="200">
                </td>
                <td><?= substr($quem_somos["texto"], 0, 80); ?> ... </td>
                <td>
                    <a href="quem_somos_editar.php?id=<?= $quem_somos["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>
        </table>
    </div>
</div>

</main>
