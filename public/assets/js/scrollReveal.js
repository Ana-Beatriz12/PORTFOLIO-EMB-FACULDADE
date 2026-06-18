let revelarElementos;

document.addEventListener("DOMContentLoaded", () => {
  revelarElementos = ScrollReveal({ reset: true });
  scrollReveal();
});

function scrollReveal() {
  //FUNCTION SCROLL REVEAL
  // scrollReveal.revelarElementos = ScrollReveal({ reset: true }); // resetando os efeitos
  // window.revelarElementos = ScrollReveal({ reset: true }); // resetando os efeitos

  // revelarElementos.clean(".conteudo-servico-interno");
  // revelarElementos.reveal(".conteudo-servico-interno");

  // TOPO DO SITE HOME
  revelarElementos.reveal(".efeito-txt-topo", {
    duration: 2100,
    distance: "-30px",
  });
  revelarElementos.reveal(".efeito-txt-topo-button", {
    duration: 2000,
    distance: "20px",
    delay: 1000,
  });

  // TITULOS DAS SESSÕES
  revelarElementos.reveal(".titulo", {
    duration: 2100,
    distance: "20px",
  });

  // TITULOS FORMULÁRIO AVALIAÇÃO
  revelarElementos.reveal(".titulo-avaliacao", {
    duration: 2100,
    distance: "20px",
  });

  // IMAGEM SOBRE MIM
  revelarElementos.reveal(".efeito-img-scroll", {
    duration: 2000,
    delay: 500,
    distance: "90px",
    origin: "left",
  });

  // IMAGEM SOBRE MIM
  revelarElementos.reveal(".efeito-txt-sobre-surgir", {
    duration: 1500,
    delay: 1000,
    distance: "90px",
    origin: "right",
  });

  // TITULOS QUALIFICAÇOES
  revelarElementos.reveal(".efeito-surgir-educacao", {
    duration: 1200,
    delay: 300,
    distance: "90px",
    origin: "left",
  });

  revelarElementos.reveal(".efeito-surgir-tituloExperiencia", {
    duration: 1200,
    delay: 400,
    distance: "90px",
    origin: "left",
  });

  // BLOCOS EDUCAÇAO
  revelarElementos.reveal(".efeito-surgir-qualificacao", {
    duration: 1200,
    delay: 500,
    distance: "90px",
    origin: "left",
  });

  // BLOCOS EXPERIENCIA
  revelarElementos.reveal(".efeito-surgir-experiencia", {
    duration: 1200,
    delay: 600,
    distance: "90px",
    origin: "left",
  });

  // TITULOS E DESCRIPTION TESTEMUNHAS
  revelarElementos.reveal(".titulo-avaliacoes", {
    duration: 1200,
    delay: 600,
    distance: "90px",
    origin: "left",
  });

  // TITULOS E DESCRIPTION TESTEMUNHAS
  revelarElementos.reveal(".description", {
    duration: 1200,
    delay: 700,
    distance: "90px",
    origin: "rigth",
  });

  //CARDS CONTATE-ME
  revelarElementos.reveal(".email", {
    duration: 1000,
    delay: 200,
    distance: "90px",
    origin: "left",
  });

  revelarElementos.reveal(".facebook", {
    duration: 1200,
    delay: 320,
    distance: "90px",
    origin: "rigth",
  });

  revelarElementos.reveal(".whatsapp", {
    duration: 1300,
    delay: 400,
    distance: "90px",
    origin: "left",
  });

  // FORMULÁRIO AVALIAÇÃO
  revelarElementos.reveal(".input-nome", {
    duration: 1000,
    delay: 200,
    distance: "90px",
    origin: "left",
  });

  revelarElementos.reveal(".input-email", {
    duration: 1200,
    delay: 320,
    distance: "90px",
    origin: "rigth",
  });

  revelarElementos.reveal(".input-phone", {
    duration: 1300,
    delay: 400,
    distance: "90px",
    origin: "left",
  });
  revelarElementos.reveal(".input-message", {
    duration: 1400,
    delay: 500,
    distance: "90px",
    origin: "right",
  });


  //PÁGINA DETALHAMENTO SERVIÇOS .HTML
  // revelarElementos.reveal(".image-portao", {
  //   duration: 1200,
  //   delay: 300,
  //   distance: "90px",
  //   origin: "left",
  // });

  // revelarElementos.reveal(".titulo-servico", {
  //   duration: 1200,
  //   delay: 300,
  //   distance: "90px",
  //   origin: "top",
  // });
  // revelarElementos.reveal(".descricao-servico-paragrafo", {
  //   duration: 1200,
  //   delay: 300,
  //   distance: "90px",
  //   origin: "top",
  // });

  // //ANIMAÇÃO LISTA COMO FUNCIONA INSTALACAO SERVIÇO
  // revelarElementos.reveal(".titulo-servico-fora", {
  //   duration: 1200,
  //   delay: 300,
  //   distance: "90px",
  //   origin: "top",
  // });

  // //LISTAGEM
  // revelarElementos.reveal(".listagem-funcionamento-instalacao", {
  //   duration: 1205,
  //   delay: 320,
  //   distance: "90px",
  //   origin: "left",
  // });
}
