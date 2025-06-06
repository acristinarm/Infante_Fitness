<?php 

$banner = getBanner();
?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Banners</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>

            <?php foreach($banner as $row): ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["nome"]; ?></td>
                    <td>
                        <img src="<?= $row["imagem"]; ?>" alt="<?= $row["imagem"]; ?>" width="200">
                    </td>
                    <td>
                        <a href="banners_editar.php?id=<?= $row["id"] ?>"><button>Editar</button></a>
                        <br><br>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>

</main>
