<?php 

$contactos = getContactos();

?>

<main class="conatiner my-5 text-center">

<div class="row m-0">
    <div class="col-12">
        <h3>Contactos</h3>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-12">
        <table>
            <tr>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Morada</th>
                <th>Link Facebook</th>
                <th>Ações</th>
            </tr>
            <tr>
                <td><?= $contactos["telefone"]; ?></td>
                <td><?= $contactos["email"]; ?></td>
                <td><?= $contactos["morada"]; ?></td>
                <td><?= $contactos["link_facebook"]; ?></td>
                <td>
                    <a href="contactos_editar.php?id=<?= $contactos["id"]; ?>"><button>Editar</button></a>
                </td>
            </tr>
        </table>
    </div>
</div>

</main>
