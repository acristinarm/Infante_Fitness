<?php 

$contactos = getContactos();

?>

<footer class="container-fluid p-0">

<?php if($showContactos): ?>

    <div class="row p-1 m-0 d-none d-lg-block" id="area_contactos">

        <div class="col pt-5 d-flex flex-row justify-content-center">
            <div class="conteudo text-center w-100">

                <div class="d-flex flex-row justify-content-evenly contactos ps-4">

                    <!-- Telefone -->
                    <div class="d-flex flex-column align-items-center mx-2">
                        <img src="imagens/tel_icon.svg" alt="Telefone">
                        <div class="mt-2"><?= $contactos["telefone"]; ?></div>
                    </div>

                    <!-- Morada -->
                    <div class="d-flex flex-column align-items-center mx-2">
                        <img src="imagens/loc.svg" alt="Localização">
                        <div class="mt-2" id="morada_footer"><?= $contactos["morada"]; ?></div>
                    </div>

                    <!-- Email -->
                    <div class="d-flex flex-column align-items-center mx-2">
                        <img src="imagens/mail.svg" alt="Email">
                        <div class="mt-2">
                            <a class="email_footer" href="mailto:<?= $contactos['email']; ?>" target="_blank">
                                <?= $contactos['email']; ?>
                            </a>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div class="d-flex flex-column align-items-center mx-2">
                        <a href="https://www.instagram.com/infante.fitness/" target="_blank">
                            <img src="imagens/instagram.png" alt="Instagram" class="instagram_icon">
                            <div class="mt-2 instagram">Instagram</div>
                        </a>
                    </div>

                </div>

            </div>
        </div>


        <div class="linha_footer"></div>

        <div class="d-flex justify-content-between align-items-center flex-wrap px-3 py-2">
            <div class="copyright">
                <a href="https://anacrebelo.eu/" target="_blank">
                    Copyright &copy; <?= date("Y"); ?> Ana Rebelo. Todos os direitos reservados.
                </a>
            </div>

            <div class="text-end d-flex flex-row gap-3 reclamacoes">
                <a href="politica-de-privacidade.html" target="_blank">Política de Privacidade</a>
                <a href="https://www.livroreclamacoes.pt/inicio" target="_blank">Livro de Reclamações</a>
            </div>
        </div>

    </div>

    <div class="row p-0 m-0 d-block d-lg-none" id="area_contactos_mobile">
            <div class="col px-5 d-flex flex-row justify-content-center">
                <div class="conteudo text-center w-100">
                    <div class="contactos d-flex flex-row justify-content-evenly ">

                        <!-- Telefone -->
                        <div class="d-flex flex-column align-items-center ms-3 me-2">
                            <img src="imagens/tel_icon.svg" alt="Telefone">
                            <div class="mt-2"><?= $contactos["telefone"]; ?></div>
                        </div>

                        <!-- Morada -->
                        <div class="d-flex flex-column align-items-center mx-2">
                            <img src="imagens/loc.svg" alt="Localizacao">
                            <div class="mt-2" id="morada_footer_mobile"><?= $contactos["morada"]; ?></div>
                        </div>

                        <!-- Email -->
                        <div class="d-flex flex-column align-items-center ms-2">
                            <img src="imagens/mail.svg" alt="Email">
                            <div class="mt-2">
                                <a class="email_footer" href="mailto:<?= $contactos['email']; ?>" target="_blank">
                                    <?= $contactos['email']; ?>
                                </a>
                            </div>
                        </div>

                        <!-- Instagram -->
                        <div class="d-flex flex-column align-items-center">
                            <a href="https://www.instagram.com/infante.fitness/" target="_blank">
                                <img src="imagens/instagram.png" alt="Instagram" class="instagram_icon">
                                <div class="my-2 instagram">Instagram</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        <div class="linha_footer"></div>
        <div class="col-10 d-flex flex-row justify-content-between align-items-center m-auto text-center copyright_mobile">
            
            <div class="text-start">
                <a href="https://anacrebelo.eu/" target="_blank">
                    Copyright &copy; <?= date("Y"); ?> Ana Rebelo. Todos os direitos reservados.
                </a>
            </div>

            <div class="d-flex flex-row gap-3 text-end reclamacoes">
                <a href="politica-de-privacidade.html" target="_blank">Política de Privacidade</a>
                <a href="https://www.livroreclamacoes.pt/inicio" target="_blank">Livro de Reclamações</a>
            </div>

        </div>


    </div>

    
    

<?php endif; ?>

<!-- <div class="row w-100 p-0 m-0 d-none d-sm-block">
    <div class="col p-0 mapa" style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%px;height:500px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=torre+de+belem&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
</div>

<div class="row d-block p-0 m-0 d-sm-none">
    <div class="col p-0 mapa_mobile" style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%;height:323px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=torre+de+belem&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embed-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
</div> -->


<!-- <div class="row w-100 p-0 m-0 d-block d-lg-none" id="footer_facebook_mobile">
    <div class="col d-flex flex-row justify-content-center p-0">
        <div class="conteudo ">
            <div class="linha_mobile"></div>

            <div class="col-8 copyright_mobile d-flex flex-row justify-content-center m-auto">
                <a href="https://anacrebelo.eu/" target="_blank">Copyright &copy; <?= date("Y"); ?> Ana Rebelo. Todos os direitos reservados.</a>
            </div>
        </div>
    </div>
</div> -->



</footer>

</body> 

</html>