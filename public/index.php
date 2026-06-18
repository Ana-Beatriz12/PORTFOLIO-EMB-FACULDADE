<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
require_once __DIR__ . '/../config/conexao.php';
//protegendo contra ataques post de outros sites.
$_SESSION['csrf'] = bin2hex(random_bytes(32));
//index.php

?><!--TRAZENDO A CONEXÃO COM O BANCO DE DADOS-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FIM GOOGLE FONTS -->
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--FIM BOOTSTRAP-->
    <!--SWIPER JS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <!--FIM SWIPER JS-->
    <!--ICONS-->
    <link rel="icon" type="image/png" href="assets/img/icon-site.png">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/main.css?v=<?= time(); ?>">

    <!--ADICIONANDO MÁSCARAS NOS CAMPOS DE INPUT DO FORMULÁRIO-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <!--ADICIONANDO MÁSCARAS NOS CAMPOS DE INPUT DO FORMULÁRIO-->


    <!-- ACRESCENTANDO UM ICONE AO SITE -->
    <link rel="shortcut icon" href="../assets/img/icon-site.png" type="image/x-icon">
    <title>PORTFÓLIO E.M.B</title>

</head>

<body>
    <div class="home">
        <header id="header">
            <div class="interface d-flex align-items-center justify-content-between">

                <!-- LOGO -->
                <div class="logo d-flex align-items-center">
                    <a href="#">
                        <img src="assets/img/logo2.png" alt="Imagem de logo">
                    </a>
                </div>

                <!-- MENU DESKTOP -->
                <nav class="menu-desktop menu d-none d-lg-block">
                    <ul class="list-unstyled d-flex mb-0">
                        <li class="px-4">
                            <a href="#pag-index">HOME</a>
                        </li>

                        <li class="px-4">
                            <a href="#sobre-mim">SOBRE</a>
                        </li>

                        <li class="px-4">
                            <a href="#pag-diferenciais">DIFERENCIAIS</a>
                        </li>

                        <li class="px-4">
                            <a href="#pag-servicos">SERVIÇOS</a>
                        </li>

                        <li class="px-4">
                            <a href="#page-contate-me">CONTATE-ME</a>
                        </li>
                    </ul>
                </nav>

                <!-- BOTÃO MENU MOBILE -->
                <div class="btn-abrir-menu" id="btn-menu">
                    <i class="bi bi-list"></i>

                </div>

                <!-- MENU MOBILE -->
                <div class="menu-mobile" id="menu-mobile">

                    <div class="btn-fechar">
                        <i class="bi bi-x-lg"></i>
                    </div>

                    <nav class="menu">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#pag-index">HOME</a>
                            </li>

                            <li>
                                <a href="#sobre-mim">SOBRE</a>
                            </li>

                            <li>
                                <a href="#pag-diferenciais">DIFERENCIAIS</a>
                            </li>

                            <li>
                                <a href="#pag-servicos">SERVIÇOS</a>
                            </li>

                            <li>
                                <a href="#page-contate-me">CONTATE-ME</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div class="overlay-menu" id="overlay-menu"></div><!--ANIMAÇÃO SCROLL HEADER COLOR-->
            </div>
        </header>

        <main>
            <!--BUTTON CLEAR/BLACK MODE SITE-->
            <div class="darkClear-mode" title="Deixar o site Claro/Escuro">
                <label class="switch">
                    <input class="darkClear-mode" id="theme" name="theme" type="checkbox" checked />
                    <div class="slider round">
                        <div class="sun-moon">
                            <svg id="moon-dot-1" class="moon-dot" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="moon-dot-2" class="moon-dot" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="moon-dot-3" class="moon-dot" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="light-ray-1" class="light-ray" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="light-ray-2" class="light-ray" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="light-ray-3" class="light-ray" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>

                            <svg id="cloud-1" class="cloud-dark" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="cloud-2" class="cloud-dark" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="cloud-3" class="cloud-dark" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="cloud-4" class="cloud-light" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="cloud-5" class="cloud-light" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                            <svg id="cloud-6" class="cloud-light" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50"></circle>
                            </svg>
                        </div>
                        <div class="stars">
                            <svg id="star-1" class="star" viewBox="0 0 20 20">
                                <path
                                    d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                            </svg>
                            <svg id="star-2" class="star" viewBox="0 0 20 20">
                                <path
                                    d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                            </svg>
                            <svg id="star-3" class="star" viewBox="0 0 20 20">
                                <path
                                    d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                            </svg>
                            <svg id="star-4" class="star" viewBox="0 0 20 20">
                                <path
                                    d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                            </svg>
                        </div>
                    </div>
                </label>
            </div><!--darkClear-mode-->

            <section class="topo-do-site section-home" id="pag-index">
                <div class="interface">
                    <div class="flex">
                        <div class="txt-topo-site efeito-txt-topo">
                            <h1>ELTON MONTEIRO<span class="broetto"> BROETTO</span></h1>
                            <p><span>Soluções</span> em <span>Segurança</span> e <span>Automação</span> Trabalhando com <span>instalação</span> de motores para portões, vídeo porteiros e <span>projetos de automação residêncial e industrial</span>.
                                Nosso objetivo é oferecer mais <span>segurança</span>, <span>praticidade</span> e <span>comodidade</span> para sua casa ou empresa, com serviços confiáveis e de qualidade.</p>

                            <div class="btn-contato efeito-txt-topo-button">
                                <a href="#sobre-mim">
                                    <button>Mais sobre mim</button>
                                </a>
                            </div><!--btn-contato-->
                        </div><!--txt-topo-site-->

                    </div><!--flex-->
                </div><!--interface-->
            </section><!--topo do site-->

            <section class="sobre section-sobre fundo-white-theme" id="sobre-mim">
                <h1 class="titulo">Sobre Mim</h1>
                <div class="flex">
                    <div class="img-sobre efeito-img-scroll">
                        <img src="assets/img/img-pessoa-2.png" alt="">
                    </div><!--img-sobre-->
                    <div class="txt-sobre efeito-txt-sobre-surgir">
                        <h2>Muito Prazer sou <span class="marker">Elton Monteiro Broetto.</span></h2>
                        <p>Sou profissional da área de <span class="marker">automação residencial</span>, dedicado a oferecer soluções modernas que trazem mais <span class="marker">segurança, praticidade e conforto para o dia a dia</span>. À frente de Soluções em Automação, atuo com <span class="marker">instalação de motores para portões, vídeo porteiros e desenvolvimento de projetos personalizados de automação</span>, sempre buscando atender às necessidades específicas de cada cliente.
                            Com compromisso, responsabilidade e atenção aos detalhes, trabalho para transformar ambientes residenciais e comerciais por meio da tecnologia, proporcionando mais comodidade e eficiência.
                        </p>

                        <p>Meu objetivo é entregar serviços confiáveis e de qualidade, garantindo tranquilidade e satisfação em cada projeto realizado.</p>

                        <div class="btn-social">
                            <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Contato via site portfólio" target="_blank"><button title="Whatsapp"><i class="bi bi-whatsapp"></i></button></a>
                            <a href="https://m.me/elton.broetto.5" target="_blank"><button title="Messenger"><i class="bi bi-messenger"></i></button></a>
                            <a href="https://mail.google.com/mail/?view=cm&to=eltonmonteirobroettobroetto@gmail.com" target="_blank"><button title="Email"><i class="bi bi-envelope-at-fill"></i></button></a>
                        </div>

                    </div><!--txt-sobre-->
                </div><!--flex-->
            </section><!--sobreMim-->

            <section class="diferenciais section-diferenciais fundo-white-theme" id="pag-diferenciais">
                <h1 class="titulo-diferenciais">Diferenciais</h1>
                <div class="flex">
                    <div class="container-principal-diferenciais">
                        <div class="container-diferencial">
                            <div class="diferenciais-border">
                                <img src="./assets/img/img-experiencia-diferenciais.svg"
                                    alt="image representacao diferenciais experiencia" />
                            </div>
                            <div class="descricao">
                                <h3>Mais de 12 anos de experiência</h3>
                            </div>
                        </div>
                        <div class="container-diferencial">
                            <div class="diferenciais-border">
                                <img src="./assets/img/img-orcamento.svg" alt="image representacao diferenciais experiencia" />
                            </div>
                            <div class="descricao">
                                <h3>Orçamento sem compromisso</h3>
                            </div>
                        </div>
                        <div class="container-diferencial">
                            <div class="diferenciais-border">
                                <img src="./assets/img/img-garantia.svg" alt="image representacao diferenciais experiencia" />
                            </div>
                            <div class="descricao">
                                <h3>Garantia no serviço</h3>
                            </div>
                        </div>
                        <div class="container-diferencial">
                            <div class="diferenciais-border">
                                <img src="./assets/img/img-materiais.svg" alt="image representacao diferenciais experiencia" />
                            </div>
                            <div class="descricao">
                                <h3>Materiais de qualidade</h3>
                            </div>
                        </div>
                        <div class="container-diferencial">
                            <div class="diferenciais-border organizacao">
                                <img src="./assets/img/img-organizacao.svg" alt="image representacao diferenciais experiencia" />
                            </div>
                            <div class="descricao">
                                <h3>Trabalho limpo e organizado</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--diferenciais-->

            <section class="servicos section-servicos fundo-white-theme" id="pag-servicos">
                <div class="button-mais-servicos">
                    <h1 class="titulo">Serviços</h1>
                    <a class="button-services" href="detalhamentoServicos.php">
                        <button class="button-enviar-form" type="button">
                            <i class="bi bi-hammer"></i>
                            <span>Mais Serviços</span>
                        </button>
                    </a>

                </div>

                <!--TESTE NOVO DESIGN CARDS SERVIÇOS-->
                <div class="container-servicos swiper">
                    <div class="card-wrapper cards-servicos">
                        <div class="card-list swiper-wrapper">
                            <!-- MONTADO DINAMICAMENTE COM JSON -->
                        </div>
                        <!--PAGINAÇÃO E NAVEGAÇÃO-->
                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                    </div>
                </div>

                <!-- Modal para detalhes CARDS SERVIÇOS -->
                <div id="service-modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="modal-video">
                            <!-- <video id="modal-video" controls></video> -->
                            <img id="modal-video"></img>
                        </div>
                        <h2 id="modal-title"></h2>
                        <p id="modal-description"></p>
                    </div>
                </div>

            </section><!--servicos-->
            <section class="testemunhas section-testemunhas" id="page-testemunhas">
                <div class="testimonials">
                    <div id="testimonials_header">
                        <h1 class="titulo-avaliacoes">Avaliações</h1>
                        <h2 class="titulo-avaliacoes"> o que os clientes dizem</h2>
                        <p class="description">Quer saber o que torna a nossa marca tão especial?
                            Confira o que nossos clientes têm a dizer!
                        </p>
                    </div>

                    <div class="container-testemunhas swiper">
                        <div class="card-list-testemunhas swiper-wrapper">

                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-next next"></div>
                        <div class="swiper-slide-button swiper-button-prev prev"></div>
                    </div>
                </div>
            </section>
            <!--testemunhas-->

            <section class="contate-me section-contateMe fundo-white-theme" id="page-contate-me">
                <h1 class="titulo">Contate-me</h1>
                <div class="formas-contatos">
                    <div class="redes-sociais">
                        <a class="card-redes-sociais email" href="https://mail.google.com/mail/?view=cm&to=eltonmonteirobroettobroetto@gmail.com" target="_blank">
                            <div class="icons-card">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="titulo-card">
                                <h2>Email</h2>
                            </div>
                            <div class="link-contato">
                                eltonmonteirobroettobroetto@gmail.com
                            </div>
                            <div class="button-contate-me">
                                <span>Contate-me</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="card-redes-sociais facebook" href="https://m.me/elton.broetto.5" target="_blank">
                            <div class="icons-card">
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </div>
                            <div class="titulo-card">
                                <h2>Messenger</h2>
                            </div>
                            <div class="link-contato">
                                Elton Broetto
                            </div>
                            <div class="button-contate-me">
                                <span>Contate-me</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="card-redes-sociais whatsapp" href="https://api.whatsapp.com/send/?phone=556799692995&text=Contato via site portfólio" target="_blank">
                            <div class="icons-card">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div class="titulo-card">
                                <h2>WhatsApp</h2>
                            </div>
                            <div class="link-contato">
                                (67) 992534552
                            </div>
                            <div class="button-contate-me">
                                <span> Contate-me</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                    <div class="form-opnions">
                        <div class="form-avaliacao">
                            <div class="titulo-avaliacao">
                                <h1>Deixe sua avaliação</h1>
                            </div>
                            <form action="processaDados.php" method="post" class="formulario-avaliacao" enctype="multipart/form-data">
                                <input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">
                                <div class="input-nome">
                                    <input type="text" name="nome" id="input-nome" placeholder="Username" />
                                    <span id="nome-erro" class="mensagem-verificacao-nome" style="color: red; display: none;">Nome inválido (apenas letras e espaço)</span>
                                </div>
                                <div class="input-email" id="input-email">
                                    <input type="email" name="email" id="emailForm" placeholder="Email" />
                                    <span id="email-error" class="mensagem-verificacao-email" style="display:none; color:red;">E-mail inválido</span>
                                </div>
                                <div class="input-phone">
                                    <input type="text" name="phone" id="input-phone" placeholder="Phone" />
                                </div>
                                <div class="input-message">
                                    <span>Deixe sua mensagem</span>
                                    <textarea type="text" name="descricao_servico" id="text-area-mensagem" maxlength="1000"></textarea>
                                    <span class="error-message-descricao" id="mensagem-verificacao-descricao" style="display:none; color:red;">Digite mais de 2 letras</span>
                                </div>
                                <div class="titulo-avaliacaoEstrelas">
                                    <span>De 1 a 5, qual a qualidade do serviço prestado?</span>
                                </div>
                                <div class="input-estrelas">
                                    <input type="radio" name="rating" value="5" id="star5">
                                    <label for="star5">★</label>

                                    <input type="radio" name="rating" value="4" id="star4">
                                    <label for="star4">★</label>

                                    <input type="radio" name="rating" value="3" id="star3">
                                    <label for="star3">★</label>

                                    <input type="radio" name="rating" value="2" id="star2">
                                    <label for="star2">★</label>

                                    <input type="radio" name="rating" value="1" id="star1">
                                    <label for="star1">★</label>
                                </div>

                                <button class="button-enviar-form btn-disabled" id="button-enviar-form" type="submit">
                                    <i class="fa-solid fa-location-arrow"></i>
                                    <span>Enviar Mensagem</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="rodape">
                <footer>
                    <div id="footer-content">
                        <div id="footer-contacts">
                            <!-- <h1>Logo</h1> -->
                            <a href="" id="logo">
                                <img src="assets/img/logo-rodape.png" alt="">
                            </a>
                            <p>Segurança Elêtronica, Automação Residêncial e Industrial</p>
                            <div id="footer-social-media">
                                <a href="https://mail.google.com/mail/?view=cm&to=eltonmonteirobroettobroetto@gmail.com" class="footer-link"
                                    id="gmail">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                                <a href="" class="footer-link" id="facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Contato via site portfólio" target="_blank"
                                    class="footer-link" id="whatsapp">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="footer-list">
                            <li>
                                <h3>Ficou com Dúvida?</h3>
                            </li>
                            <li>
                                <a href="perguntasFrequentes.html" class="footer-link">Perguntas Frequentes!</a>
                            </li>
                            <li>
                                <a href="detalhamentoServicos.php" class="footer-link">Serviços Detalhados</a>
                            </li>
                            <li>
                                <a href="detalhamentoTestemunhas.php" class="footer-link">Avaliação Clientes</a>
                            </li>
                            <!-- <li>
                                <a href="detalhamentoTestemunhas.php" class="footer-link">Avaliação Clientes</a>
                            </li> -->
                        </ul>

                        <ul class="footer-list">
                            <li>
                                <h3>Desenvolvido por <span class="pink"><a href="https://portfolioanabeatriz.netlify.app/" target="_blank" title="PORTFÓLIO ANA BROETTO">Ana Broetto</a></span></h3>
                            </li>
                            <li>
                                <a href="https://github.com/Ana-Beatriz12" target="_blank" class="footer-link footer-pink">Git Hub</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/ana-beatriz-bento-broetto-27a075279/" target="_blank" class="footer-link footer-pink">Linkedin</a>
                            </li>
                            <li>
                                <a href="https://mail.google.com/mail/?view=cm&to=anabeatrizbroetto@gmail.com" target="_blank" class="footer-link footer-pink">Gmail</a>
                            </li>
                            <li>
                                <a href="https://portfolioanabeatriz.netlify.app/" target="_blank" class="footer-link footer-pink">Portfólio Ana Broetto</a>
                            </li>
                        </ul>

                        <!-- <div id="footer-subscribe">
                            <h3>Subcribe</h3>

                            <p>Enter your email to get notifed about our news solutions</p>

                            <div id="input-group">
                                <input type="text" id="email">
                                <button>
                                    <i class="fa-solid fa-envelope"></i>
                                </button>
                            </div>
                        </div> -->
                    </div>

                    <div id="footer-copyright">
                        &#169
                        <?php echo date('Y') ?>
                        all rigths reserve
                    </div>
                </footer>
            </section>
        </main>

        <!-- Botão Voltar ao Topo -->
        <a href="#" id="btnTopo" class="btn-topo" title="Voltar ao topo">&#8679;</a>


        <script src="./assets/js/index.js"></script>
        <script src="./assets/js/darkClear-mode-button.js"></script>
        <!-- <script src="swiper-bundle.min.js"></script> -->
        <script src="./assets/js/carrossel-servicos.js"></script>
        <script src="./assets/js/carrossel-testemunhas.js"></script>
        <script src="./assets/js/servicos.js"></script>
        <script src="./assets/js/testemunhas.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="./assets/js/scrollReveal.js"></script>
        <!--SCRIPT JQUERY CARDS SERVIÇOS VIDEOS-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script><!--BOOTSTRAP-->

    </div>
</body>

</html>