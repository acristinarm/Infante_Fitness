<?php 

$quem_somos = getQuemSomos();

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
        <h3>Sobre Nós</h3>
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
                    <img src="<?= htmlspecialchars($baseURL . $quem_somos["imagem"]); ?>" alt="<?= htmlspecialchars($quem_somos["imagem"]); ?>" width="200">
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
