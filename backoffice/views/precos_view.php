<?php 

$preco = getPreco();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Preços</h3>
    </div>
</div>

<div class="row mx-0 mt-4"> 
    <div class="col-12">
        <a href="precos_novo.php"><button>Novo</button></a>
        <table> 
            <tr>
                <th>Imagem</th>
                <th>Texto</th>
                <th>Ações</th>
            </tr>

            <?php foreach($preco as $p): ?>

                <tr>
                    <td>
                        <img src="<?= $p["imagem"]; ?>" alt="" style="width:500px;">
                    </td>
                    <td><?= substr($p["texto"], 0, 200); ?> ... </td>
                    <td>
                        <a href="precos_editar.php?id=<?= $p["id"]; ?>"><button>Editar</button></a>
                        <br><br>
                        <a href="precos_apagar.php?id=<?= $p["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>

</main>
