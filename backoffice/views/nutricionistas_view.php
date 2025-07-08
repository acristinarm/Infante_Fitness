<?php 

$nutri = getNutris();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Nutricionistas</h3>
    </div>
</div>

<div class="row mx-0 mt-4"> 
    <div class="col-12">
        <a href="nutricionistas_novo.php"><button>Novo</button></a>
        <table> 
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Formação</th>
                <th>Ações</th>
            </tr>

            <?php foreach($nutri as $n): ?>

                <tr>
                    <td>
                        <img src="<?= $n["imagem"]; ?>" alt="" style="width:500px;">
                    </td>
                    <td><?= $n["nome"]; ?></td>
                    <td><?= substr($n["formacao"], 0, 200); ?> ... </td>
                    <td>
                        <a href="nutricionistas_editar.php?id=<?= $n["id"]; ?>"><button>Editar</button></a>
                        <br><br>
                        <a href="nutricionistas_apagar.php?id=<?= $n["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>

</main>
