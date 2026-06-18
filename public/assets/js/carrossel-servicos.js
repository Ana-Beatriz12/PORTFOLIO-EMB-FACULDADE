//carrossel-servicos.js


function swiperServicos() {
  const slides = document.querySelectorAll(".card-item").length;
  // console.log(slides);
  new Swiper(".cards-servicos ", {
    // swiperEl
    loop: slides > 3,
    slidesPerView: 3, // 3 cards visíveis em desktop
    spaceBetween: 24,

    autoplay: {
      // TEMPO PARA QUE O SLIDE PASSE SOZINHO! UHUU
      delay: 7000,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: true,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}

function servicesVideos() {
  // const video_thumbs = document.querySelectorAll(".thumb-video");
  const panels = document.querySelectorAll(".panel");
  const modal = document.getElementById("service-modal");
  const modalVideo = document.getElementById("modal-video");
  const modalTitle = document.getElementById("modal-title");
  const modalDescription = document.getElementById("modal-description");
  const closeBtn = document.querySelector(".close");
  const servicosSection = document.querySelector(".servicos");
  // const cardsServicos = document.querySelector(".card-item");

  // video_thumbs.forEach((video_thumb) => {
  //   video_thumb.addEventListener("mouseover", function () {
  //     this.style.opacity = 1; //faz os titulos "desaparecerem" quando o mouse é passado por cima dos cards
  //     this.play(); // faz o video aparecer e rodar quando o mouse é passado por cima.
  //     this.playbackRate = 2.0; //velocidade que o video passa
  //   });
  // });

  // video_thumbs.forEach((video_thumb) => {
  //   video_thumb.addEventListener("mouseleave", function () {
  //     this.style.opacity = 0; //faz os titulos aparecerem quando o mouse é tirado de cima dos cards
  //     this.pause(); // faz o video pausar se o mouse é tirado de cima
  //   });
  // });

  //clicando para abrir modal com "data".O data-video sao os atributos que colocamos em cada card na class="video-card panel" , cada um contendo seu video expecífico. assim um container expansível se abrirá contando as informações de cada um!
  panels.forEach((panel) => {
    panel.addEventListener("click", () => {
      const videoSrc = panel.getAttribute("data-video");
      const title = panel.getAttribute("data-title"); // assim como cada card expansível terá seu titulo quando aberto.
      const description = panel.getAttribute("data-description");

      modalVideo.src = videoSrc; // pegando a variável modalVideo que criamos lá encima, e atribuindo ela para a vraiável videoSrc criada nessa função
      modalTitle.textContent = title; // fazendo a mesma coisa com o title,
      modalDescription.textContent = description; //e a descrição

      // colocando a função de abrir o bloco expansível
      modal.style.display = "block";
      servicosSection.classList.add("modal-blur"); // aplicando a class qua está criada no css com efeito de blur
      //modalVideo.play(); // reproduzindo o video no modal('container expansível')
    });
  });

  // FECHANDO O MODAL('container expansível')
  closeBtn.addEventListener("click", () => {
    modal.style.display = "none"; // fechando o container modal('container expansível')
    servicosSection.classList.remove("modal-blur"); // tirando a classe e o efeito de blur
    modalVideo.pause(); // pausa o vídeo
    modalVideo.currentTime = 0; // resenta o vídeo.
  });

  // FECHANDO O MODAL AO CLICAR FORA DO CONTAINER
  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.style.display = "none"; // fechando o container modal('container expansível')
      servicosSection.classList.remove("modal-blur"); // tirando a classe e o efeito de blur
      modalVideo.pause(); // pausa o vídeo
      modalVideo.currentTime = 0; // resenta o vídeo.
    }
  });
}

//EFEITO DE DEMONSTRAÇÃO NOVA AVALIAÇÃO TESTEMUNHAS.
// window.addEventListener("load", () => {
//   const testimonials = document.querySelectorAll(".cards-testemunhas");
//   if (testimonials.length > 0) {
//     testimonials[0].classList.add("highlight");
//   }
// });



//18:24

// document.addEventListener("DOMContentLoaded", () => {
//   //FUNCTIONS SWIPER JS CARROSSEL NOTÍCIAS
//   document
//     .querySelectorAll(".cards-servicos-testemunhas")
//     .forEach((swiperEl) => {
//       const pagination = swiperEl.querySelector(".swiper-pagination");
//       const next = swiperEl.querySelector(".swiper-button-next");
//       const prev = swiperEl.querySelector(".swiper-button-prev");
//       const slides = swiperEl.querySelectorAll(".swiper-slide").length;

//       new Swiper(swiperEl, {
//         loop: slides > 3,
//         slidesPerView: 3, // 3 cards visíveis em desktop
//         spaceBetween: 24,

//         autoplay: {
//           // TEMPO PARA QUE O SLIDE PASSE SOZINHO! UHUU
//           delay: 7000,
//         },
//         breakpoints: {
//           0: {
//             slidesPerView: 1,
//             centeredSlides: true,
//           },
//           768: {
//             slidesPerView: 2,
//           },
//           1024: {
//             slidesPerView: 3,
//           },
//         },
//         pagination: pagination
//           ? {
//               el: pagination,
//               clickable: true,
//               dynamicBullets: true,
//             }
//           : false,
//         navigation:
//           next && prev
//             ? {
//                 nextEl: next,
//                 prevEl: prev,
//                 // nextEl: '.swiper-button-next',
//                 // prevEl: '.swiper-button-prev',
//               }
//             : false,
//       });
//     });
//   // const swiper = new Swiper('.card-wrapper', {
//   //     loop: true,
//   //     slidesPerView: 3, // 3 cards visíveis em desktop
//   //     spaceBetween: 24,

//   //     autoplay: {// TEMPO PARA QUE O SLIDE PASSE SOZINHO! UHUU
//   //         delay: 7000
//   //     },

//   //     breakpoints: {
//   //         0: {
//   //             slidesPerView: 1,
//   //             // centeredSlides: true,
//   //         },
//   //         768: {
//   //             slidesPerView: 2,
//   //             // centeredSlides: false,
//   //         },
//   //         1024: {
//   //             slidesPerView: 3,
//   //         },
//   //     },
//   //     pagination: {
//   //         el: '.swiper-pagination',
//   //         clickable: true,
//   //         dynamicBullets: true
//   //     },
//   //     navigation: {
//   //         nextEl: '.swiper-button-next',
//   //         prevEl: '.swiper-button-prev',
//   //     },
//   // });

//   const video_thumbs = document.querySelectorAll(".thumb-video");
//   const panels = document.querySelectorAll(".panel");
//   const modal = document.getElementById("service-modal");
//   const modalVideo = document.getElementById("modal-video");
//   const modalTitle = document.getElementById("modal-title");
//   const modalDescription = document.getElementById("modal-description");
//   const closeBtn = document.querySelector(".close");
//   const servicosSection = document.querySelector(".servicos");
//   const cardsServicos = document.querySelector(".card-item");

//   video_thumbs.forEach((video_thumb) => {
//     video_thumb.addEventListener("mouseover", function () {
//       this.style.opacity = 1; //faz os titulos "desaparecerem" quando o mouse é passado por cima dos cards
//       this.play(); // faz o video aparecer e rodar quando o mouse é passado por cima.
//       this.playbackRate = 2.0; //velocidade que o video passa
//     });
//   });

//   video_thumbs.forEach((video_thumb) => {
//     video_thumb.addEventListener("mouseleave", function () {
//       this.style.opacity = 0; //faz os titulos aparecerem quando o mouse é tirado de cima dos cards
//       this.pause(); // faz o video pausar se o mouse é tirado de cima
//     });
//   });

//   //clicando para abrir modal com "data".O data-video sao os atributos que colocamos em cada card na class="video-card panel" , cada um contendo seu video expecífico. assim um container expansível se abrirá contando as informações de cada um!
//   panels.forEach((panel) => {
//     panel.addEventListener("click", () => {
//       const videoSrc = panel.getAttribute("data-video");
//       const title = panel.getAttribute("data-title"); // assim como cada card expansível terá seu titulo quando aberto.
//       const description = panel.getAttribute("data-description");

//       modalVideo.src = videoSrc; // pegando a variável modalVideo que criamos lá encima, e atribuindo ela para a vraiável videoSrc criada nessa função
//       modalTitle.textContent = title; // fazendo a mesma coisa com o title,
//       modalDescription.textContent = description; //e a descrição

//       // colocando a função de abrir o bloco expansível
//       modal.style.display = "block";
//       servicosSection.classList.add("modal-blur"); // aplicando a class qua está criada no css com efeito de blur
//       modalVideo.play(); // reproduzindo o video no modal('container expansível')
//     });
//   });

//   // FECHANDO O MODAL('container expansível')
//   closeBtn.addEventListener("click", () => {
//     modal.style.display = "none"; // fechando o container modal('container expansível')
//     servicosSection.classList.remove("modal-blur"); // tirando a classe e o efeito de blur
//     modalVideo.pause(); // pausa o vídeo
//     modalVideo.currentTime = 0; // resenta o vídeo.
//   });

//   // FECHANDO O MODAL AO CLICAR FORA DO CONTAINER
//   window.addEventListener("click", (event) => {
//     if (event.target === modal) {
//       modal.style.display = "none"; // fechando o container modal('container expansível')
//       servicosSection.classList.remove("modal-blur"); // tirando a classe e o efeito de blur
//       modalVideo.pause(); // pausa o vídeo
//       modalVideo.currentTime = 0; // resenta o vídeo.
//     }
//   });

//   //EFEITO DE DEMONSTRAÇÃO NOVA AVALIAÇÃO TESTEMUNHAS.
//   // window.addEventListener("load", () => {
//   //   const testimonials = document.querySelectorAll(".cards-testemunhas");
//   //   if (testimonials.length > 0) {
//   //     testimonials[0].classList.add("highlight");
//   //   }
//   // });
// });
