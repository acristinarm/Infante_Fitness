<?php 

$empreendimentos = getEmpreendimentos();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Empreendimentos</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <a href="empreendimento_novo.php"><button>Novo</button></a>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Ações</th>
            </tr>

            <?php foreach($empreendimentos as $e): ?>
                <tr>
                    <td>
                        <?php for($i=1; $i <=4; $i++): ?>
                            <img src="<?= $e["imagem_$i"]; ?>" alt="<?= $e["imagem_$i"]; ?>" style="width:200px;">
                        <?php endfor; ?>
                    </td>
                    <td><?= $e["título"]; ?></td>
                    <td><?= substr($e["texto"], 0, 80); ?> ... </td>
                    <td>
                        <a href="empreendimentos_editar.php?id=<?= $e["id"]; ?>"><button>Editar</button></a>
                        <br><br>
                        <a href="empreendimentos_apagar.php?id=<?= $e["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>

</main>
