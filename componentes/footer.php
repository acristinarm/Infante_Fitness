<?php 

$contactos = getContactos();

?>

<footer class="container-fluid p-0">

<?php if($showContactos): ?>

    <div class="row p-0 m-0 d-none d-lg-block" id="area_contactos">
        <div class="col d-flex flex-row justify-content-center">
            <div class="sobrepor"></div>
            <div class="conteudo text-center">
                <div class="linha_branca"></div>
                <p id="titulo_contactos">Contactos</p>
                <div class="d-flex flex-row justify-content-evenly">
                    <div><img src="imagens/tel.svg" alt="tel.svg"></div>
                    <div><img src="imagens/loc.svg" alt="loc.svg"></div>
                    <div><img src="imagens/mail.svg" alt="mail.svg"></div>
                </div>
                <div class="contactos d-flex flex-row justify-content-center gap-3">
                    <div class="col-3 text-center"><?= $contactos["telefone"]; ?></div>
                    <div class="col-3 text-center" id="morada_footer"><?= $contactos["morada"]; ?></div>
                    <div class="col-3 text-center"><?= $contactos["email"]; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-0 m-0 d-block d-lg-none" id="area_contactos_mobile">
        <div class="col d-flex flex-row justify-content-center">
            <div class="sobrepor"></div>
            <div class="conteudo text-center">
                <div class="linha_branca_mobile"></div>
                <p id="titulo_contactos_mobile">Contactos</p>
                <div class="contactos d-flex flex-column justify-content-center">
                    <div><img src="imagens/tel.svg" alt="tel.svg"></div>
                    <div class="col text-center text-center"><?= $contactos["telefone"]; ?></div>
                    <div><img src="imagens/loc.svg" alt="loc.svg"></div>
                    <div class="col text-center" id="morada_footer_mobile"><?= $contactos["morada"]; ?></div>
                    <div><img src="imagens/mail.svg" alt="mail.svg"></div>
                    <div class="col text-center"><?= $contactos["email"]; ?></div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<div class="row w-100 p-0 m-0 d-none d-sm-block">
    <div class="col p-0 mapa" style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%px;height:500px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=torre+de+belem&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
</div>

<div class="row d-block p-0 m-0 d-sm-none">
    <div class="col p-0 mapa_mobile" style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%;height:323px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=torre+de+belem&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
</div>

<div class="row w-100 p-0 m-0 d-none d-lg-block" id="footer_facebook">
    <div class="col d-flex flex-row justify-content-center p-0">
        <div class="sobrepor"></div>
        <div class="conteudo text-center">
            <a href="<?= $contactos["link_facebook"]; ?>" target="_blank">
                <img src="imagens/facebook.svg" alt="facebook.svg">
            </a>
            <p>Siga-nos no Facebook</p>
            <div class="linha"></div>
            <nav class="col-9 links_footer d-flex flex-row justify-content-center gap-3 m-auto">
                <a href="index.php">Home</a>
                <a href="quem_somos.php">Quem Somos</a>
                <a href="socios.php">Sócios</a>
                <a href="noticias.php">Notícias</a>
                <a href="destaques.php">Destaques</a>
                <a href="#" onclick="abrirEmpreendimentos()">Empreendimentos</a>
                <a href="centro_f.php">Centro de Férias</a>
                <a href="contactos.php">Contactos</a>
            </nav>
            <div class="col-5 copyright">
                <a href="https://www.mediamaster.pt/" target="_blank">Copyright &copy; <?= date("Y"); ?> Grupo MediaMaster. Todos os direitos reservados.</a>
            </div>
        </div>
    </div>
</div>

<div class="row w-100 p-0 m-0 d-block d-lg-none" id="footer_facebook_mobile">
    <div class="col d-flex flex-row justify-content-center p-0">
        <div class="sobrepor"></div>
        <div class="conteudo text-center ">
            <a href="<?= $contactos["link_facebook"]; ?>" target="_blank" id="link_facebook_mobile">
                <img src="imagens/facebook.svg" alt="facebook">
            </a>
            <p>Siga-nos no Facebook</p>

            <div class="linha_mobile"></div>

            <div class="col-8 copyright_mobile d-flex flex-row justify-content-center m-auto">
                <a href="https://www.mediamaster.pt/" target="_blank">Copyright &copy; <?= date("Y"); ?> Grupo MediaMaster. Todos os direitos reservados.</a>
            </div>
        </div>
    </div>
</div>



</footer>

</body> 

</html>