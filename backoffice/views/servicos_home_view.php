<?php 

$servicos = getServicos();

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
        <h3>Serviços Home</h3>
    </div>
</div>

<div class="row mx-0 mt-4"> 
    <div class="col-12">
        <a href="servicos_home_novo.php"><button>Novo</button></a>
        <br><br>
        <table> 
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Texto</th>
                <th>Ações</th>
            </tr>            

            <?php foreach($servicos as $s):  
                $img_src = $baseURL . $s["imagem"];
            ?>
                <tr>
                    <td>
                        <img src="<?= htmlspecialchars($img_src); ?>" alt="" style="width:500px;">
                    </td>
                    <td><?= $s["nome"]; ?></td>
                    <td><?= substr($s["texto"], 0, 200); ?> ... </td>
                    <td>
                        <a href="servicos_home_editar.php?id=<?= $s["id"]; ?>"><button>Editar</button></a>
                        <br><br>
                        <a href="servicos_home_apagar.php?id=<?= $s["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

</main>
