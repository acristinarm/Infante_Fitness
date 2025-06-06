<?php 

$noticias = getNoticias();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Notícias</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <a href="noticias_novo.php"><button>Novo</button></a>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Ações</th>
            </tr>

            <?php foreach($noticias as $n): ?>

                <tr>
                    <td>
                        <img src="<?= $n["imagem"]; ?>" alt="" width="200">
                    </td>
                    <td><?= $n["título"]; ?></td>
                    <td><?= substr($n["texto"], 0, 200); ?> ... </td>
                    <td>
                        <a href="noticias_editar.php?id=<?= $n["id"]; ?>"><button>Editar</button></a>
                        <br><br>
                        <a href="noticias_apagar.php?id=<?= $n["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>

</main>
