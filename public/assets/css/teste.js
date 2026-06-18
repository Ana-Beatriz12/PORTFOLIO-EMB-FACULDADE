document.addEventListener("DOMContentLoaded", () => {
  carregarNoticias();
});

// Função que busca as notícias via PHP
async function fetchNoticias() {
  try {
    const response = await fetch("../../api/get-noticias.php");
    if (!response.ok) throw new Error("Erro ao buscar dados");
    return await response.json(); // retorna o JSON
  } catch (error) {
    console.error("Erro no fetch:", error);
    return null;
  }
}

// Função principal que monta o HTML dos cards
async function carregarNoticias() {
  const data = await fetchNoticias(); // chama o fetch

  if (!data) return;

  let noticias = data.destaques;//pegando o array das notícias!

  noticias.forEach((item, indice) => {
    if (indice === 0) {
      // Atualiza notícia principal
      document.querySelector(".text-noticia-principal h3").textContent = item.titulo;
      document.querySelector(".text-noticia-principal p:nth-of-type(2)").textContent = item.manchete;
      document.querySelector(".categorias-noticia-principal").textContent = item.categorias;
      document.querySelector(".img-noticia-principal img").src = item.imagem;

      // NOVO: Atualiza o link da imagem/container
      const linkElement = document.querySelector(".link-noticia-principal"); // Seleciona o <a>
      if (linkElement) {
        linkElement.href = item.noticiaLink; // Define o href dinamicamente
        // Opcional: Adicione target se não estiver no HTML
        linkElement.target = "_blank"; // Abre em nova aba
      }

    } if (indice > 0) {

      // Atualiza os cards
      const wrapper = document.querySelector(".card-list");
      wrapper.innerHTML = ""; // limpa antes de preencher

      data.destaques.forEach((item, indice) => {
        if (indice < 6) {// limitando a quantidade de apresentação de cards para apenas 6 demonstrados!
          const card = `
            <a class="card-item-noticias swiper-slide" href="${item.noticiaLink}" style="background-image: url('${item.imagem}')">
              <div class="card-text-noticias">
                <div class="autor-noticias">
                  <span class="date-noticia">${item.data}, por </span>
                  <strong class="name-autor-noticia">${item.autor}</strong>
                </div>
                <h2 class="user-titulo-noticia-cards" title="${item.titulo}">${item.titulo}</h2>
                <span class="categorias-noticias" title="${item.categorias}">${item.categorias}</span>
              </div>
            </a>
          `;
          wrapper.insertAdjacentHTML("beforeend", card);

        }
      });

      //chamando a função swiperNoticias dos cards do arquivo swiperNoticias.js
      if (typeof swiperNoticias === "function") swiperNoticias();
    }
  })


}

function swiperNoticias() {
    new Swiper('.my-swiper', {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,


        autoplay: {// TEMPO PARA QUE O SLIDE PASSE SOZINHO! UHUU
            delay: 7000,
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            speed: 400,
        },

        //Responsividade em brekpoin, quantidade de cards apresentados!
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        }

    });
}