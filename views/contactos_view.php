<?php 

$contactos = getContactos();

?>

<main class="container"> 

    <div class="row conteudo_simples d-none d-md-block">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="linha_laranja m-auto"></div>
                </div>
            </div>

            <div class="row">
                <div class="col bem_vindo">
                    <p>Contactos</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row conteudo_simples d-none d-md-block px-4">
        <div class="col">
            <div class="row d-flex flex-row">
                <div class="col-lg-5 textos_contactos">
                    <p>Morada</p>
                    <div class="contactos_editavel pe-5"><?= $contactos["morada"]; ?></div>
                    <p>Telefone</p>
                    <div class="fw-normal text-lowercase contactos_editavel"><?= $contactos["telefone"]; ?></div>
                    <p>E-mail </p>
                    <div class="fw-normal text-lowercase contactos_editavel"><?= $contactos["email"]; ?></div>
                </div>

                <div class="col-lg-7 ps-4">
                    <form action="" id="contactos_form">
                        <label for="nome">*Nome</label> <br>
                        <input type="text" id="nome" name="nome" placeholder="Insira aqui o seu nome" required>

                        <br>

                        <label for="email">*E-mail</label> <br>
                        <input type="text" id="email" name="email" placeholder="Insira aqui o seu e-mail" required>

                        <br>

                        <label for="telefone">*Telefone</label> <br>
                        <input type="tel" id="telefone" name="telefone" placeholder="Insira aqui o seu telefone" required>

                        <br>

                        <label for="assunto">*Assunto</label> <br>
                        <input type="text" id="assunto" name="assunto" placeholder="Insira aqui o assunto" required>

                        <br>

                        <label for="mensagem">*Mensagem</label> <br>
                        <textarea name="mensagem" id="mensagem" placeholder="Insira aqui a sua mensagem" required></textarea>

                        <p class="preenchimento_obrig">* Campos de preenchimento obrigatório</p>

                        <div class="d-flex flex-row align-items-center caixa_checkbox mb-3">
                            <input type="checkbox" id="checkbox" name="receber-email">
                            <label class="mensagem_checkbox ps-2" for="checkbox">Quero receber uma cópia desta mensagem no meu e-mail</label>                       
                            <img src="imagens/recaptcha.png" alt="" id="recaptcha">
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"> 
                <a href="#" class="d-flex flex-row justify-content-end">
                    <div class="botao botao_contactos d-flex flex-row justify-content-center align-items-center">
                    Enviar
                    </div>
                </a>        
            </div>
        </div>
    </div>


    <div class="row conteudo_simples d-block d-md-none">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="linha_laranja_mobile m-auto"></div>
                </div>
            </div>

            <div class="row">
                <div class="col bem_vindo_mobile">
                    <p>Contactos</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row conteudo_simples d-block d-md-none px-4">
        <div class="col">
            <div class="row d-flex flex-column">
                <div class="col textos_contactos_mobile">
                    <p>Morada</p>
                    <div class="contactos_editavel_mobile"><?= $contactos["morada"]; ?></div>
                    <p>Telefone</p>
                    <div class="fw-normal text-lowercase contactos_editavel_mobile"><?= $contactos["telefone"]; ?></div>
                    <p>E-mail </p>
                    <div class="fw-normal text-lowercase contactos_editavel_mobile"><?= $contactos["email"]; ?></div>
                </div>

                <div class="col">
                    <form action="" id="contactos_form_mobile">
                        <label for="nome">*Nome</label> <br>
                        <input type="text" id="nome" name="nome" placeholder="Insira aqui o seu nome" required>

                        <br>

                        <label for="email">*E-mail</label> <br>
                        <input type="text" id="email" name="email" placeholder="Insira aqui o seu e-mail" required>

                        <br>

                        <label for="telefone">*Telefone</label> <br>
                        <input type="text" id="telefone" name="telefone" placeholder="Insira aqui o seu telefone" required>

                        <br>

                        <label for="assunto">*Assunto</label> <br>
                        <input type="text" id="assunto" name="assunto" placeholder="Insira aqui o assunto" required>

                        <br>

                        <label for="mensagem">*Mensagem</label> <br>
                        <textarea name="mensagem" id="mensagem" placeholder="Insira aqui a sua mensagem" cols="78" rows="7"></textarea>

                        <p class="preenchimento_obrig_mobile">* Campos de preenchimento obrigatório</p>

                        <div class="d-flex flex-row align-items-center caixa_checkbox_mobile ">
                            <input type="checkbox" id="checkbox_mobile" name="receber-email">
                            <label class="mensagem_checkbox_mobile ps-2" for="checkbox">Quero receber uma cópia desta mensagem no meu e-mail</label>                       
                        </div>

                        <img src="imagens/recaptcha.png" alt="" id="recaptcha_mobile">

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col mb-3"> 
                    <a href="#" class="d-flex flex-row justify-content-end">
                        <div class="botao botao_contactos_mobile d-flex flex-row justify-content-center align-items-center">
                        enviar
                        </div>
                    </a>        
                </div>
            </div>

        </div>

    </div>

</main>
