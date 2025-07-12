<?php
$parcerias = getParcerias();
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
            <table>
                <tr>
                    <th>Logo</th>
                    <th>Nome</th>
                    <th>Link</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($parcerias as $p): ?>

                    <tr>
                        <td>
                            <img src="<?= $p["logo"]; ?>" alt="" width="200">
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
