<?php 

$carousel = getCarousel();

$host = $_SERVER['HTTP_HOST'];

if (strpos($host, 'localhost') !== false) {
    $baseURL = 'http://localhost/infante_fitness/';
} else {
    $baseURL = 'https://' . $host . '/';  
}

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
        <br><br>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>

            <?php foreach($carousel as $c): 
                $img_src = $baseURL . $c["imagem"]; // monta o caminho completo da imagem
            ?>
                <tr>
                    <td>
                        <img src="<?= htmlspecialchars($img_src); ?>" alt="<?= htmlspecialchars($c["imagem"]); ?>" width="200">
                    </td>
                    <td>
                        <a href="carousel_editar.php?id=<?= $c["id"]; ?>"><button>Editar</button></a><br><br>
                        <a href="carousel_apagar.php?id=<?= $c["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>

</main>
