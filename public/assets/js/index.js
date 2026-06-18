// const { doc } = require("prettier");

document.addEventListener("DOMContentLoaded", () => {
  //MENU-MOBILE INTERAÇOES HEADER
  //CRIANDO UMA INTERAÇÃO PARA O MENU SER FECHADO QUANDO CLICADO EM QUALQUER LUGAR DELE.
  let btnMenu = document.getElementById("btn-menu");
  let menu = document.getElementById("menu-mobile");
  let overlay = document.getElementById("overlay-menu");

  // CRIANDO UM EVENTO DE CLICK, UM OBSERVER PARA EXECUTAR UMA FUNÇÃO QUANDO O MENUMOBILE FOR CLICADO
  btnMenu.addEventListener("click", () => {
    menu.classList.add("abrir-menu"); //A CLASSE ABRIR-MENU SERA CHAMADA QUANDO O USUÁRIO CLICAR NO MENU SANDUÍCHE
  });
  //FECHANDO O MENU-MOBILE
  menu.addEventListener("click", () => {
    menu.classList.remove("abrir-menu"); //A CLASSE ABRIR-MENU SERA CHAMADA QUANDO O USUÁRIO CLICAR NO MENU
  });

  //FECHANDO O MENU-MOBILE AO CLICAR FORA DO MESMO
  overlay.addEventListener("click", () => {
    menu.classList.remove("abrir-menu"); //A CLASSE ABRIR-MENU SERA CAHAMADA QUANDO O USUÁRIO CLICAR NO MENU
  });

  // qunado o usuário rolar a página, verifica se deve mostrar o botão,o onscroll serve para isso, ele detecta controla e anima a rolagem da pagina web ou de elementos especificos

  function scrollFunction() {
    const btnTopo = document.getElementById("btnTopo");
    if (document.documentElement.scrollTop > 1280) {
      btnTopo.classList.add("show");
    } else {
      btnTopo.classList.remove("show");
    }
  }

  /* EFEITO DE ADICIONAR UM BACKGROUND COLOR AO HEADER QUANDO O USUÁRIO ROLAR A TELA.*/
  window.addEventListener("scroll", function () {
    let header = document.querySelector("#header");
    //adicionando uma nova classe para o nosso header
    header.classList.toggle("efeitoRolagemHeader", window.scrollY > 0);
    scrollFunction();

    //a nossa classe efeitoRolagemHeader será adicionada ao nosso header sempre que a nossa janela(window) tiver uma rolagem no eixo y(vertical |) e que a posição da rolagem seja maior que 0
  });

  // EFEITO HOVER LINKS PAGINAS HEADER
  const menuLinks = document.querySelectorAll('.menu a[href^="#"'); // o querySelectorAll retorna todos os elementos correspondentes em uma lista

  //pegando a distancia de top, de cada sessão.
  function getDistanceFromTheTop(element) {
    const id = element.getAttribute("href");
    return document.querySelector(id).offsetTop;
  }

  // calculando a distancia de cada sessão do topo
  function nativeScroll(distanceFromTheTop) {
    window.scroll({
      top: distanceFromTheTop,
      behavior: "smooth", // deixando a função de scrool suave
    });
  }

  function scrollToSection(event) {
    event.preventDefault(); // tirando propriedades do link e deixando de exibir ele na url so site
    const distanceFromTheTop = getDistanceFromTheTop(event.target) - 95;
    // smoothScrollTo(0, distanceFromTheTop, 400);
    nativeScroll(distanceFromTheTop);
  }

  menuLinks.forEach((link) => {
    link.addEventListener("click", scrollToSection);
  });

  //FUNCTION MÁSCARAS INPUTS FORMULÁRIO PHONE
  // $(document).ready(function () {
  //   $('#phone').mask('(00) 00000-0000');
  // });

  // FUNCTION VERIFICAÇÃO EMAIL FORMULÁRIO DEIXE SUA AVALIAÇÃO

  const emailInput = document.getElementById("emailForm");
  const errorSpan = document.getElementById("email-error");
  const buttonSubmit = document.getElementById("button-enviar-form");

  if (emailInput && errorSpan && buttonSubmit) {
    // verificação se a variavel existe para nao dar erro nas outras páginas.
    // Expressão regular básica para e-mail
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    emailInput.addEventListener("input", function () {
      const email = emailInput.value;
      console.log(email);

      if (email === "") {
        emailInput.classList.remove("input-error");
        errorSpan.style.display = "none";
        buttonSubmit.disabled = false;
        buttonSubmit.classList.remove("btn-disabled");
      } else if (emailRegex.test(email)) {
        // E-mail válido
        errorSpan.style.display = "none";
        emailInput.classList.remove("input-error");
        emailInput.classList.add("input-success");
        buttonSubmit.disabled = false;
        buttonSubmit.classList.remove("btn-disabled");
      } else {
        // E-mail inválido
        errorSpan.style.display = "block";
        emailInput.classList.remove("input-success");
        emailInput.classList.add("input-error");
        buttonSubmit.disabled = true;
        buttonSubmit.classList.add("btn-disabled");
      }
    });
  }

  // FUNCTION VERIFICAÇÃO NOME
  const inputNome = document.getElementById("input-nome");
  const errorSpanNome = document.getElementById("nome-erro");

  const regexNome = /^[A-Za-zÀ-ÖØ-öø-ÿ']{2,}(?:\s+[A-Za-zÀ-ÖØ-öø-ÿ']{2,})+$/;

  function validarNome(nome) {
    const nomeLimpo = nome.trim(); // tira espaços do nome ex: ( ana), depois do trim(ana).
    if (!regexNome.test(nomeLimpo)) return false; // passa pelo regex e pelo trim, se for invalido retorna false e nao continua

    const partes = nomeLimpo.split(/\s+/); // o split divide a string em um array de substrings , usando um separador especifico, e retorna um novo array ex: ["Olá", "mundo", "JavaScript"]

    if (partes.length < 2) return false;

    if (!partes.every((p) => p.length >= 3)) return false; // o every verifica se todos os elementos atendem e passam em um teste específico, retorna true ou false, ele ja interrompe a execução se acha uma coisa errada.

    return true;
  }

  function mensagensError(nome) {
    if (!/^[A-Za-zÀ-ÖØ-öø-ÿ'\s]+$/.test(nome)) {
      errorSpanNome.innerText = "Use apenas letras";
    } else if (!nome.includes(" ")) {
      errorSpanNome.innerText = "Digite nome e sobrenome";
    } else if (!nome.split(/\s+/).every((p) => p.length >= 3)) {
      errorSpanNome.innerText = "Cada nome deve ter pelo menos 3 letras";
    }
  }

  if (inputNome && errorSpanNome && buttonSubmit) {
    inputNome.addEventListener("input", function () {
      const nome = inputNome.value;
      // console.log("nome com espaço" + nome);
      if (nome === "") {
        inputNome.classList.remove("input-error");
        inputNome.classList.remove("input-success");
        errorSpanNome.style.display = "none";
        buttonSubmit.disabled = true;
        buttonSubmit.classList.add("btn-disabled");
        // errorSpanDescricao.style.display = "block";
        console.log("nome vazio");
      } else if (validarNome(nome)) {
        // nome válido
        inputNome.classList.remove("input-error");
        errorSpanNome.style.display = "none";
        inputNome.classList.add("input-success");
        buttonSubmit.classList.remove("btn-disabled");
        buttonSubmit.disabled = false;
        // VERIFICAÇÃO SE A PESSOA TENTA MANDAR O FORM SEM PREENCHER O NOME
        errorSpanDescricao.style.display = "none";
        mensagemAvaliacaoInput.classList.remove("input-error");
      } else {
        // nome inválido
        inputNome.classList.remove("input-success");
        inputNome.classList.add("input-error");
        errorSpanNome.style.display = "block";
        buttonSubmit.disabled = true;
        buttonSubmit.classList.add("btn-disabled");
        mensagensError(nome);
      }
    });
  }

  // FUNCTION VALIDAR DÍGITOS TEXT AREA DEIXE SUA MENSAGEM
  const mensagemAvaliacaoInput = document.getElementById("text-area-mensagem");
  const errorSpanDescricao = document.getElementById(
    "mensagem-verificacao-descricao",
  );

  if (mensagemAvaliacaoInput && errorSpanDescricao && inputNome) {
    mensagemAvaliacaoInput.addEventListener("input", function () {
      const descricao = this.value; // pegando o valor digitado no textarea
      const nome = document.getElementById("input-nome").value;
      console.log(descricao.length);
      verificaQuantidadeText(descricao, nome);
    });
  }

  function verificaQuantidadeText(descricao, nome) {
    if (descricao === "") {
      mensagemAvaliacaoInput.classList.remove("input-error");
      mensagemAvaliacaoInput.classList.remove("input-success");
      buttonSubmit.disabled = true;
      buttonSubmit.classList.add("btn-disabled");
    } else if (descricao.length < 3) {
      errorSpanDescricao.style.display = "block";
      errorSpanDescricao.innerText =
        "A descrição deve ter mais de 3 caracteres";
      mensagemAvaliacaoInput.classList.remove("input-success");
      mensagemAvaliacaoInput.classList.add("input-error");
      buttonSubmit.disabled = true;
      buttonSubmit.classList.add("btn-disabled");
      // VERIFICAÇÃO SE A PESSOA TENTA MANDAR O FORM SEM PREENCHER O NOME
    } else if (nome === "" && descricao.length > 3) {
      buttonSubmit.disabled = true;
      buttonSubmit.classList.add("btn-disabled");
      errorSpanDescricao.style.display = "block";
      errorSpanDescricao.innerText = "O Campo UserName deve ser Preenchido!";
      mensagemAvaliacaoInput.classList.add("input-error");
      mensagemAvaliacaoInput.classList.remove("input-success");
      console.log("eroro sjdbhdbhdbd");
    } else {
      //se a descrição for válida
      errorSpanDescricao.style.display = "none";
      mensagemAvaliacaoInput.classList.remove("input-error");
      mensagemAvaliacaoInput.classList.add("input-success");
      buttonSubmit.disabled = false;
      buttonSubmit.classList.remove("btn-disabled");
    }
  }

  //FUNCTION PHONE
  const inputPhone = document.getElementById("input-phone");
  if (inputPhone) {
    inputPhone.addEventListener("input", (e) => {
      let value = e.target.value.replace(/\D/g, ""); // remove tudo que não é número
      if (value.length > 11) value = value.slice(0, 11);

      if (value.length > 10) {
        value = value.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
      } else if (value.length > 6) {
        value = value.replace(/^(\d{2})(\d{4})(\d{0,4})$/, "($1) $2-$3");
      } else if (value.length > 2) {
        value = value.replace(/^(\d{2})(\d{0,5})$/, "($1) $2");
      } else {
        value = value.replace(/^(\d*)$/, "($1");
      }

      e.target.value = value;
    });
  }

  //FUNCTION INPUT SERVIÇOS DETALHADOS PESQUISA FILTRO
  const inputServices = document.getElementById("search");

  if (inputServices) {
    inputServices.addEventListener("input", (event) => {
      const resultPesquisa = formatString(event.target.value); // pegando o valor do serviço digitado pesquisa
      const itensServicos = document.querySelectorAll(
        ".conteudo-servico-interno",
      );
      let encontrouResultado = false;

      itensServicos.forEach((item) => {
        const titulo = item.querySelector("h1").textContent;

        if (formatString(titulo).includes(resultPesquisa)) {
          // item.style.display = "block";
          item.style.removeProperty("display");
          // item.classList.add("ativo");// demonstrando o elemento
          encontrouResultado = true;
        } else {
          item.style.display = "none";
          // item.classList.remove("ativo");// escondendo  o elemento
        }
      });
      // pega o container de serviço nao encontrado!
      const noResults = document.querySelector("#servico-nao-encontrado");
      if (!encontrouResultado) {
        noResults.style.display = "block";
        // noResults.style.removeProperty("display");
        // noResults.classList.add("ativo");// demonstrando o elemento
      } else {
        noResults.style.display = "none";
        // noResults.classList.remove("ativo");// escondendo  o elemento
      }
    });

    function formatString(texto) {
      return texto
        .toLowerCase()
        .trim()
        .normalize("NFD") // separa acentos
        .replace(/[\u0300-\u036f]/g, ""); // remove acentos; // tirando os espaçamentos do valor digitado e deixando ele minusculo.
    }
  }

  // FUNCTION SURGIMENTO SERVIÇOS DETALHADOS COM CSS
  const elementos = document.querySelectorAll(".reveal");

  if (elementos) {
    function animarScroll() {
      const alturaTela = window.innerHeight;

      elementos.forEach((elemento) => {
        const posicao = elemento.getBoundingClientRect().top;

        if (posicao < alturaTela - 100) {
          elemento.classList.add("ativo");
        }
      });
    }

    window.addEventListener("scroll", animarScroll);
    window.addEventListener("load", animarScroll);
  }
});
