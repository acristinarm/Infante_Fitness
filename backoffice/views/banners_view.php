<?php 

$banner = getBanner();

$host = $_SERVER['HTTP_HOST'];

if (strpos($host, 'localhost') !== false) {
    $baseURL = 'http://localhost/infante_fitness/';
} else {
    $baseURL = 'https://' . $host . '/';  
}

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
                <th>Nome</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>

            <?php foreach($banner as $row): 
                $img_src = $baseURL . $row["imagem"]; // aqui corrigido para $baseURL
            ?>
                <tr>
                    <td><?= htmlspecialchars($row["nome"]) ?></td>
                    <td>
                        <img src="<?= htmlspecialchars($img_src) ?>" alt="<?= htmlspecialchars($row["nome"]) ?>" width="200">
                    </td>
                    <td>
                        <a href="banners_editar.php?id=<?= $row["id"] ?>"><button>Editar</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>    
    </div>
</div>

</main>
