<?php
$centro_ferias = getCentroFerias();
?>

<main class="container my-5 text-center">

    <div class="row m-0">
        <div class="col-12">
            <h3>Centro de Férias</h3>
        </div>
    </div>

    <div class="row mx-0 mt-4">
        <div class="col-12">
            <table>
                <tr>
                    <th>Imagem Principal</th>
                    <th>Imagens Secundárias</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ações</th>
                </tr>

                <tr>
                    <td><img src="<?= $centro_ferias["imagem_principal"]; ?>" alt="" width="200"></td>
                    <td>
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <img src="<?= $centro_ferias["imagem_sec_$i"]; ?>" alt="<?= $centro_ferias["imagem_sec_$i"]; ?>" style="width:100px;">
                        <?php endfor; ?>
                    </td>
                    <td><?= $centro_ferias["titulo"]; ?></td>
                    <td><?= substr($centro_ferias["texto"], 0, 200); ?> ... </td>
                    <td>
                        <a href="centro_ferias_editar.php?id=<?= $centro_ferias["id"]; ?>"><button>Editar</button></a>
                        <br><br>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</main>
