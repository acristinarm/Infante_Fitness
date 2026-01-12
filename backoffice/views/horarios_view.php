<?php 

$horarios = getHorarios();

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
        <h3>Horários</h3>
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
                    <img src="<?= htmlspecialchars($baseURL . $horarios["imagem"]); ?>" alt="Horário" style="height: 60px;">
                </td>
                <td><?= substr($horarios["texto"], 0, 80); ?> ... </td>
                <td>
                    <a href="horarios_editar.php?id=<?= $horarios["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>        

        </table>
    </div>
</div>

</main>