<!doctype html>
<html lang="pt-br">
<?php
session_start();
require_once __DIR__ . '/../config/conexao.php';
//protegendo contra ataques post de outros sites.
$_SESSION['csrf'] = bin2hex(random_bytes(32));
//index.php

?><!--TRAZENDO A CONEXÃO COM O BANCO DE DADOS-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FIM GOOGLE FONTS -->
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- ACRESCENTANDO UM ICONE AO SITE -->
    <link rel="shortcut icon" href="../assets/img/icon-site.png" type="image/x-icon" />

    <!-- ICONES BOOTSTRAP MENU SANDUICHE MOBILE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- ICONES BOOTSTRAP MENU SANDUICHE MOBILE -->
    <!--LINK AWESOME ICON-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Detalhamento Testemunhas</title>
</head>

<body>
    <div class="home">
        <header id="header">
            <div class="interface">
                <div class="logo">
                    <a href="#">
                        <img src="assets/img/logo2.png" alt="Imagem de logo" />
                    </a>
                </div>
                <nav class="menu-desktop menu">
                    <ul>
                        <!--cria uma lista não ordenada-->
                        <li><a href="index.php#pag-index">HOME</a></li>
                        <li><a href="index.php#sobre-mim">SOBRE</a></li>
                        <li><a href="index.php#pag-diferenciais">DIFERENCIAIS</a></li>
                        <li><a href="index.php#pag-servicos">SERVIÇOS</a></li>
                        <li><a href="index.php#page-contate-me">CONTATE-ME</a></li>
                    </ul>
                </nav>

                <div class="btn-abrir-menu" id="btn-menu">
                    <i class="bi bi-list"></i>
                </div>
                <!--btn-abrir-menu-->

                <div class="menu-mobile" id="menu-mobile">
                    <div class="btn-fechar">
                        <i class="bi bi-x-lg"></i>
                    </div>
                    <nav class="menu">
                        <ul>
                            <!--cria uma lista não ordenada-->
                            <li><a href="index.php#pag-index">HOME</a></li>
                            <li><a href="index.php#sobre-mim">SOBRE</a></li>
                            <li><a href="index.php#pag-diferenciais">DIFERENCIAIS</a></li>
                            <li><a href="index.php#pag-servicos">SERVIÇOS</a></li>
                            <li><a href="index.php#page-contate-me">CONTATE-ME</a></li>
                        </ul>
                    </nav>
                </div>
                <!--menu-mobile-->
                <div class="overlay-menu" id="overlay-menu"></div>
                <!--overlay-menu-->
            </div>
            <!--interface-->

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
            
            <section
                class="topo-do-site section-detalhamento-testemunhas"
                id="pag-detalhamento-testemunhas">
                <div class="container-principal-testemunhas">
                    <div class="detalhesTestemunhas">
                        <!--MONTADO DINAMICAMENTE COM JSON detalhamento-testemunhas.js-->
                    </div>
                </div>
            </section>
            <!--topo do site-->
        </main>
    </div>

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
                        <a href="detalhamentoServicos.html" class="footer-link">Serviços Detalhados</a>
                    </li>
                    <li>
                        <a href="detalhamentoTestemunhas.php" class="footer-link">Avaliação Clientes</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <h3>Desenvolvido por <span class="pink">Ana Broetto</span></h3>
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
                </ul>

                <div id="footer-subscribe">
                    <h3>Subcribe</h3>

                    <p>Enter your email to get notifed about our news solutions</p>

                    <div id="input-group">
                        <input type="text" id="email">
                        <button>
                            <i class="fa-solid fa-envelope"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div id="footer-copyright">
                &#169
                <?php echo date('Y') ?>
                all rigths reserve
            </div>
        </footer>
    </section>
    <!-- Botão Voltar ao Topo -->
    <a href="#" id="btnTopo" class="btn-topo" title="Voltar ao topo">&#8679;</a>
</body>

<script src="./assets/js/index.js"></script>
<script src="./assets/js/darkClear-mode-button.js"></script>
<script src="./assets/js/detalhamento-testemunhas.js"></script>


</html>