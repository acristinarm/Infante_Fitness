<?php 

$destaque = getDestaques();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Destaques</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <a href="destaque_novo.php"><button>Novo</button></a>
        <table> 
            <tr>
                <th>Título</th>
                <th>Mostrar na Home</th>
                <th>Imagem</th>
                <th>Texto</th>
                <th>Ações</th>
            </tr>

            <?php foreach($destaque as $d): ?>

                <tr>
                    <td><?= $d["título"]; ?></td>
                    <td>
                        <?php if ($d["mostrar_home"] == 1){
                            $d["mostrar_home"] = "SIM";
                        } else { $d["mostrar_home"] = "NÃO";}
                        ?>
                        <?= $d["mostrar_home"]; ?>
                    </td>
                    <td>
                        <img src="<?= $d["imagem"]; ?>" alt="" style="width:500px;">
                    </td>
                    <td><?= substr($d["texto"], 0, 200); ?> ... </td>
                    <td>
                        <a href="destaques_editar.php?id=<?= $d["id"]; ?>"><button>Editar</button></a>
                        <br><br>
                        <a href="destaque_apagar.php?id=<?= $d["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>

</main>
