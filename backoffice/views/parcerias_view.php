<?php
$parcerias = getParcerias();

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
            <h3>Parcerias</h3>
        </div>
    </div>

    <div class="row mx-0 mt-4">
        <div class="col-12">
            <a href="parcerias_novo.php"><button>Novo</button></a>
            <br><br>
            <table>
                <tr>
                    <th>Logo</th>
                    <th>Nome</th>
                    <th>Link</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($parcerias as $p): 
                    $img_src = $baseURL . $p["logo"];
                ?>
                    <tr>
                        <td>
                            <img src="<?= htmlspecialchars($img_src); ?>" alt="<?= htmlspecialchars($p["nome"]); ?>" width="200">
                        </td>
                        <td><?= $p["nome"]; ?></td>
                        <td><?= $p["link"]; ?></td>
                        <td>
                            <a href="parcerias_editar.php?id=<?= $p["id"]; ?>"><button>Editar</button></a>
                            <br><br>
                            <a href="parcerias_apagar.php?id=<?= $p["id"]; ?>"><button>Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </table>
        </div>
    </div>

</main>
