<?php 

$people = getIPeople();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Coaches</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <a href="infante_people_novo.php"><button>Novo</button></a>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Mostrar na Home</th>
                <th>Sub-título</th>
                <th>Formação</th>
                <th>Ações</th> 
            </tr>

            <?php foreach($people as $p): ?>

                <tr>
                    <td>
                        <img src="<?= $p["imagem"]; ?>" alt="" width="200">
                    </td>
                    <td><?= $p["nome"]; ?></td>
                    <td>
                        <?php if ($p["mostrar_home"] == 1){
                            $p["mostrar_home"] = "SIM";
                        } else { $p["mostrar_home"] = "NÃO";}
                        ?>
                        <?= $p["mostrar_home"]; ?>
                    </td>
                    <td><?= $p["subtitulo"]; ?></td>
                    <td><?= substr($p["formacao"], 0, 200); ?> ... </td>
                    <td>
                        <a href="infante_people_editar.php?id=<?= $p["id"]; ?>"><button>Editar</button></a>
                        <br><br>
                        <a href="infante_people_apagar.php?id=<?= $p["id"]; ?>"><button>Apagar</button></a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>

</main>

