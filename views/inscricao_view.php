<?php 

$inscricao = getInscricao();

?>

<main class="container"> 

    <section class="registo-section py-5">
    <div class="container">
        <div class="row align-items-center flex-column flex-md-row">

            <!-- MOCKUP DO TELEMÓVEL À ESQUERDA -->
            <div class="col-md-6 text-center mb-4 mb-md-0">
                <img src="<?= $inscricao['imagem']; ?>" alt="Imagem inscrição" class="img-inscricao">
            </div>

            <!-- IMAGEM DINÂMICA À DIREITA -->
            <div class="col-md-6 text-center text-md-start">
                <div class="contorno-texto">
                    <h2 class="fw-bold mb-3">REGISTA-TE<br>NA APP REGYBOX</h2>
                    <ul class="list-unstyled small-text mb-4">
                        <li>• Marcação de aulas</li>
                        <li>• Registo dos tempos/resultados WOD’s</li>
                        <li>• Registo das cargas/PR</li>
                        <li>• Gestão dos Treinos</li>
                    </ul>
                                
                    <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center justify-content-md-start mt-4">
                        <a href="https://www.regibox.pt/regiprof_wod/registo/novo_registo.php?id_box=283&lang=pt&code=3602ca1de01dc9e1e9f9ca523d6b67f0" class="btn btn-outline-dark px-4 py-2">INSCREVER-ME</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>

    <div class="row conteudo_simples d-none d-sm-block mt-5">

        <div class="col">
            <div class="linha_laranja m-auto"></div>
        </div>
    
    </div>


    <div class="row conteudo_simples d-block d-sm-none mt-5">

        <div class="col">  
            <div class="linha_laranja_mobile m-auto"></div>
        </div>

    </div>

    <section id="experimentar" class="py-5" style="background-color:rgba(1, 11, 21, 0.93); color: #fff;">
        <div class="container">
            <h2 class="text-center mb-3" style="font-size: 2.2rem; font-weight: bold; color: rgb(63, 205, 205);">
                Quero Experimentar!
            </h2>
            <p class="text-center mb-4" style="font-size: 1.1rem;">
                Preenche os dados e nós entramos em contacto contigo.
            </p>

            <form onsubmit="return enviarWhatsApp();" class="mx-auto" style="max-width: 600px;">
                <div class="mb-3">
                <input type="text" class="form-control" id="nome" placeholder="Nome *" required
                    style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;" />
                </div>

                <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email *" required
                    style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;" />
                </div>

                <div class="mb-3">
                <textarea class="form-control" id="mensagem" placeholder="Mensagem *" rows="4" required
                    style="border-radius: 0; border: none; background-color: #fff; padding: 1rem;"></textarea>
                </div>

                <div class="text-center mb-3">
                <small>
                    Os campos assinalados com * são obrigatórios
                </small>
                </div>

                <button type="submit" class="btn w-100 mt-3"
                style="background-color:rgb(63, 205, 205); color: rgb(255, 255, 255); font-weight: bold; padding: 1rem;">
                Enviar Mensagem
                </button>
            </form>
        </div>
    </section>



    <script>
        function enviarWhatsApp() {
        const nome = document.getElementById("nome").value;
        const email = document.getElementById("email").value;
        const mensagem = document.getElementById("mensagem").value;

        const texto = `Olá! Quero experimentar o treino. Aqui estão os meus dados:

        Nome: ${nome}
        Email: ${email}
        Mensagem: ${mensagem}`;

        const encodedTexto = encodeURIComponent(texto);

        // Substitui pelo número correto da box
        const numero = "351911056935";

        const url = `https://wa.me/${numero}?text=${encodedTexto}`;
        window.open(url, "_blank");

        return false;
        }

        window.addEventListener('load', () => {
            if (window.location.hash === '#experimentar') {
                const el = document.getElementById('experimentar');
                if (el) {
                el.scrollIntoView({ behavior: 'smooth' });
                }
            }
            });

    </script>

</main>
