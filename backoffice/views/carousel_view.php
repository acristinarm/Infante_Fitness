<?php 

$carousel = getCarousel();
?>

<main class="container my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Carousel</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <a href="carousel_novo.php"><button>Novo</button></a>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>

            <?php foreach($carousel as $c): ?>
                <tr>
                    <td>
                        <img src="<?= $c["imagem"]; ?>" alt="<?= $c["imagem"]; ?>" width="200">
                    </td>
                    <td>
                        <a href="carousel_editar.php?id=<?=$c["id"]; ?>"><button>Editar</button></a><br><br>
                        <a href="carousel_apagar.php?id=<?= $c["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>

</main>
