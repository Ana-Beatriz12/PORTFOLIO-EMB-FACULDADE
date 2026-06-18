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
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Karma:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_right_alt" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- FIM GOOGLE FONTS -->
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--FIM BOOTSTRAP-->
  <!--CSS-->
  <link rel="stylesheet" href="assets/css/main.css?v=<?= time(); ?>" />
  <!-- ACRESCENTANDO UM ICONE AO SITE -->
  <link rel="shortcut icon" href="../assets/img/icon-site.png" type="image/x-icon" />
  <!-- ICONES BOOTSTRAP MENU SANDUICHE MOBILE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <title>Serviços Detalhados</title>
</head>

<body>
  <div class="home">
    <header id="header">
      <div class="interface">
        <div class="logo">
          <a href="#pag-servicos-detalhados">
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

      <section class="topo-do-site section-servicos-detalhados fundo-white-theme" id="pag-servicos-detalhados">
        <div class="barra-pesquisa-services">
          <div class="input-group">
            <div class="input-icon">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <input type="text" id="search" class="input-field" placeholder="Pesquisar Serviço">
          </div>
        </div>
        <div class="container-principal">
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-portoes.webp" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Manutenção Profissional em Portões</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  Garanta o funcionamento seguro e eficiente do seu portão com
                  um serviço técnico especializado. Realizamos manutenção
                  preventiva e corretiva para evitar falhas, ruídos e
                  travamentos, aumentando a durabilidade do equipamento. Nossa
                  equipe realiza um diagnóstico completo para identificar e
                  resolver qualquer problema.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Manutenção Profissional em Portões) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Avaliação Técnica:</strong>
                    Verificamos o estado geral do portão e seus componentes.
                  </li>
                  <li>
                    <strong class="marker">Manutenção Preventiva:</strong>
                    Ajustes, lubrificação e verificação de peças.
                  </li>
                  <li>
                    <strong class="marker">Correção de Problemas:</strong>
                    Substituição ou reparo de componentes quando necessário.
                    Teste Final: Conferimos o funcionamento completo do portão.
                  </li>
                  <li>
                    <strong class="marker">Teste Final:</strong> Conferimos o
                    funcionamento completo do portão.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 30 dias sobre a mão de obra, garantindo
                tranquilidade e segurança no serviço realizado.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-portasPortoes.webp" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Instalação de Automação para Portões e Portas</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  Tenha mais conforto, praticidade e segurança com a automação
                  do seu portão. Instalamos motores e sistemas automáticos com
                  equipamentos de qualidade e configuração completa para uso no
                  dia a dia.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Instalação de Automação para Portões e Portas) ? "
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Visita Técnica:</strong> Avaliamos o
                    tipo de portão e o motor ideal.
                  </li>
                  <li>
                    <strong class="marker">Instalação Profissional:</strong>
                    Montagem do motor e dos componentes do sistema.
                  </li>
                  <li>
                    <strong class="marker">Configuração:</strong> Programação
                    dos controles e ajustes do funcionamento.
                  </li>
                  <li>
                    <strong class="marker">Teste Final:</strong> Garantimos que
                    o portão funcione com segurança e eficiência.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 12 meses no equipamento e 30 dias na instalação.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-controleAcesso.avif" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Instalação de Sistemas de Controle de Acesso</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  Tenha mais segurança e controle sobre quem entra e sai do seu
                  imóvel. Instalamos sistemas modernos de controle de acesso
                  para residências, empresas e condomínios.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Instalação de Sistemas de Controle de Acesso) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Planejamento do Sistema:</strong>
                    Definimos os pontos ideais de instalação.
                  </li>
                  <li>
                    <strong class="marker">Instalação dos Equipamentos:</strong>
                    Montagem dos dispositivos de controle.
                  </li>
                  <li>
                    <strong class="marker">Configuração do Sistema:</strong>
                    Programação de acesso e funcionamento.
                  </li>
                  <li>
                    <strong class="marker">Teste Final:</strong> Verificamos o
                    funcionamento e a segurança do sistema.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 12 meses no equipamento e 30 dias na instalação.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-cercaEletrica.jpg" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Instalação de Cercas Eletrônicas para Segurança</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  Proteja seu imóvel com um sistema de cerca elétrica eficiente
                  e seguro. Realizamos instalação seguindo normas técnicas,
                  garantindo proteção contra invasões.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Instalação de Cercas Elétricas para Segurança) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Visita Técnica:</strong> Avaliação do
                    perímetro do imóvel.
                  </li>
                  <li>
                    <strong class="marker">Instalação Estruturada:</strong>
                    Fixação de hastes, fios e central eletrônica.
                  </li>
                  <li>
                    <strong class="marker">Configuração:</strong> Ajuste do
                    sistema e integração com alarmes.
                  </li>
                  <li>
                    <strong class="marker">Teste Final:</strong> Verificação do
                    funcionamento e da segurança.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 12 meses no equipamento e 30 dias na instalação.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-sistemaAlarme.jpg" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Instalação de Sistemas de Alarme</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  Aumente a proteção da sua casa ou empresa com um sistema de
                  alarme eficiente e confiável. Trabalhamos com sensores
                  modernos e configuração completa do sistema.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Instalação de Sistemas de Alarme) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Análise de Segurança:</strong>
                    Definimos os melhores pontos para sensores.
                  </li>
                  <li>
                    <strong class="marker">Instalação do Sistema:</strong>
                    Montagem dos sensores e da central.
                  </li>
                  <li>
                    <strong class="marker">Configuração:</strong> Programação do
                    sistema de alarme.
                  </li>
                  <li>
                    <strong class="marker">Teste Final:</strong> Simulação de
                    funcionamento para garantir a eficiência.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 12 meses no equipamento e 30 dias na instalação.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-concertina.jpg" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Instalação de Concertina de Segurança</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  A concertina é uma solução eficiente para reforçar a segurança
                  de muros e cercas. Trabalhamos com instalação segura e
                  materiais de alta resistência.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Instalação de Concertina de Segurança) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Avaliação do Local:</strong>
                    Definição da melhor forma de instalação.
                  </li>
                  <li>
                    <strong class="marker">Fixação Estruturada:</strong>
                    Instalação das bases e da concertina.
                  </li>
                  <li>
                    <strong class="marker">Acabamento Profissional:</strong>
                    Ajustes e alinhamento do material.
                  </li>
                  <li>
                    <strong class="marker">Verificação Final:</strong> Garantia
                    de firmeza e segurança da instalação.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 30 dias na mão de obra.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-interfone.jpg" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Instalação de Interfone</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  Tenha mais praticidade na comunicação e controle de acesso ao
                  seu imóvel com sistemas modernos de interfone.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Instalação de Interfone) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Planejamento:</strong> Definição dos
                    pontos de instalação.
                  </li>
                  <li>
                    <strong class="marker">Instalação dos Equipamentos:</strong>
                    Montagem do interfone e cabeamento.
                  </li>
                  <li>
                    <strong class="marker">Configuração:</strong> Ajuste do
                    sistema de comunicação.
                  </li>
                  <li>
                    <strong class="marker">Teste Final:</strong> Verificação
                    completa do funcionamento.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 12 meses no equipamento e 30 dias na instalação.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-videoPorteiro.jpg" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Instalação de Vídeo Porteiro</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  Tenha mais segurança ao visualizar visitantes antes de liberar
                  o acesso ao imóvel. Instalamos vídeo porteiros modernos e
                  fáceis de usar.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Instalação de Vídeo Porteiro) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Visita Técnica:</strong> Avaliação do
                    local de instalação.
                  </li>
                  <li>
                    <strong class="marker">Instalação Profissional:</strong>
                    Montagem da câmera e do monitor.
                  </li>
                  <li>
                    <strong class="marker">Configuração:</strong> Ajuste do
                    sistema de visualização.
                  </li>
                  <li>
                    <strong class="marker">Teste Final:</strong> Verificação da
                    imagem e funcionamento.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 12 meses no equipamento e 30 dias na instalação.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-programacao-controleRemoto.jpg" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Programação de Controles Remotos</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  Realizamos cadastro e programação de controles remotos para
                  portões automáticos, garantindo praticidade no acesso ao seu
                  imóvel.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Programação de Controles Remotos) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Verificação do Sistema:</strong>
                    Identificação do modelo da central.
                  </li>
                  <li>
                    <strong class="marker">Instalação dos Equipamentos:</strong>
                    Montagem dos dispositivos de controle.
                  </li>
                  <li>
                    <strong class="marker">Programação do Controle:</strong>
                    Cadastro do dispositivo no sistema.
                  </li>
                  <li>
                    <strong class="marker">Teste de Funcionamento:</strong>
                    Verificação do alcance e resposta do portão.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 30 dias no serviço.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <div class="conteudo-servico-interno reveal">
            <div class="servicosDetalhados">
              <div class="img-servico image-portao">
                <img src="./assets/img/img-instalacao-central.avif" alt="" />
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Instalação e Manutenção de Central Eletrônica</h1>
                <!--OS CODIGOS DE EXEMPLO DE NOTICIAS QUE SERÃO OS SERVIÇOS ESTAO NO PROJETO SISTEMAS-UNISAUDEMS PROJETO UNISAUDEMS AQUI:
                  https://github.com/Sistemas-UNISAUDEMS/unisaudems/tree/feature-01/public_html-->
                <p class="conteudo-servico descricao-servico-paragrafo">
                  A central eletrônica é responsável pelo funcionamento de
                  sistemas automatizados como portões, alarmes e cercas
                  elétricas. Realizamos instalação e manutenção com total
                  segurança.
                </p>
                <div class="btn-contato">
                  <a href="https://api.whatsapp.com/send/?phone=556799692995&text=Pode me desponibilizar um orçamento de (Instalação e Manutenção de Central Eletrônica) ?"
                    target="_blank">
                    <button>Faça um Orçamento</button>
                  </a>
                </div>
                <!--btn-contato-->
              </div>
            </div>
            <div class="descricao-servico-fora">
              <h3 class="titulo-servico-fora">Como Funciona a Instalação Do Serviço:</h3>
              <div class="listagem-funcionamento-instalacao">
                <ul>
                  <li>
                    <strong class="marker">Diagnóstico Técnico:</strong>
                    Verificação do sistema existente.
                  </li>
                  <li>
                    <strong class="marker">Instalação ou Substituição:</strong>
                    Montagem da central eletrônica.
                  </li>
                  <li>
                    <strong class="marker">Configuração do Sistema:</strong>
                    Ajuste e programação dos comandos.
                  </li>
                  <li>
                    <strong class="marker">Teste Final:</strong> Verificação
                    completa do funcionamento.
                  </li>
                </ul>
              </div>
              <p class="conteudo-servico titulo-servico-fora">
                <strong class="marker">Nossa Garantia:</strong> Oferecemos
                garantia de 30 dias na mão de obra.
              </p>
            </div>
            <hr class="divisor-services" />
          </div>
          <!--CONTAINER SERVIÇO NAO ENCONTRADO!-->
          <div class="conteudo-servico-interno ativo" id="servico-nao-encontrado">
            <div class="servicosDetalhados">
              <div class="img-servico video-servico-nao-encontrado">
                <video autoplay loop muted plays-inline class="back-video">
                  <source src="./assets/videos/servicoNaoEncontrado.mp4" type="video/mp4">
                </video>
              </div>
              <div class="descricao-servico titulo-servico">
                <h1>Serviço não Encontrado!</h1>
                <p class="conteudo-servico descricao-servico-paragrafo">
                  O serviço pesquisado não foi encontrado, por favor tente novamente!
                </p>
              </div>
            </div>
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
            <a href="detalhamentoServicos.php" class="footer-link">Serviços Detalhados</a>
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
  <!-- Botão Voltar ao Topo -->
  <a href="#" id="btnTopo" class="btn-topo" title="Voltar ao topo">&#8679;</a>

  <script src="./assets/js/index.js"></script>
  <script src="./assets/js/darkClear-mode-button.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="./assets/js/scrollReveal.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script><!--BOOTSTRAP-->
</body>

</html>

<!-- chat para arrumar o bottsrap das paginas -->