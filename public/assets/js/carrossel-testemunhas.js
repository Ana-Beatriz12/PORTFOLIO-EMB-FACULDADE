//carrossel-testemunhas.js

function swiperTestemunhas() {
  const containerTestemunhas = document.querySelector(".container-testemunhas");
  const slides = containerTestemunhas.querySelectorAll(".swiper-slide").length;
  new Swiper(containerTestemunhas, {
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