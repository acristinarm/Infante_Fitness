<?php 

$testemunhos = getTestemunhos();

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
            <h3>Testemunhos</h3>
        </div>
    </div>

    <div class="row mx-0 mt-4"> 
        <div class="col-12">
            <a href="testemunhos_novo.php"><button>Novo</button></a>
            <br><br>
            <table> 
                <tr>
                    <th>Imagem Antes</th>
                    <th>Imagem Depois</th>
                    <th>Texto</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>            

                <?php foreach($testemunhos as $t):  
                    $img_antes = $baseURL . $t["imagem_antes"];
                    $img_depois = $baseURL . $t["imagem_depois"];
                ?>
                    <tr>
                        <td>
                            <img src="<?= htmlspecialchars($img_antes); ?>" alt="Antes" style="width:150px; height:auto;">
                        </td>
                        <td>
                            <img src="<?= htmlspecialchars($img_depois); ?>" alt="Depois" style="width:150px; height:auto;">
                        </td>
                        <td>
                            <?= htmlspecialchars(substr($t["texto"], 0, 80)); ?>...
                        </td>
                        <td>
                            <?= htmlspecialchars($t["nome"]); ?>
                        </td>
                        <td>
                            <a href="testemunhos_editar.php?id=<?= $t["id"]; ?>"><button>Editar</button></a>
                            <br><br>
                            <a href="testemunhos_apagar.php?id=<?= $t["id"]; ?>"><button>Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

</main>
