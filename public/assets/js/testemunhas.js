// testemunhas.js
document.addEventListener("DOMContentLoaded", () => {
  carregarTestemunhas();
});

// const response = await fetch("/public/assets/api/get-services.php");

// Função que busca as notícias via PHP
async function fetchTestemunhas() {
  try {
    const response = await fetch("/assets/api/get-testemunhas.php");
    if (!response.ok) throw new Error("Erro ao buscar os dados via php!"); // se a variavel response com a consulta falhar retorna um erro
    // console.log("dados recebidos:", response);
    return await response.json(); // se tudo certo, retorna os dados json!
  } catch (error) {
    console.error("Erro no fetch:", error);
    return null;
  }
}

// Função principal que monta o HTML dos cards de serviços!
async function carregarTestemunhas() {
  const data = await fetchTestemunhas(); // chama a função que busca os dados do serviços
  // console.log("DATA:", data);
  // console.log("SERVICOS:", data.testemunhas);

  if (!data) return; // se der erro, retorna a consulta novamente.

  const wrapper = document.querySelector(".card-list-testemunhas");
  wrapper.innerHTML = ""; // limpa antes de preencher!
  // console.log(wrapper);

  data.testemunhas.forEach((item) => {
    let estrelas = "";

    for (let i = 1; i <= 5; i++) {
      if (i <= item.avaliacao) {
        estrelas += `<i class="fa-solid fa-star"></i>`;
      } else {
        estrelas += `<i class="fa-regular fa-star"></i>`;
      }
    }
    const card = `
    <div class="swiper-slide cards-testemunhas">
      <a href="detalhamentoTestemunhas.php" class="testemunhas-detalhamento" title="Saiba Mais!">
            <div class="testimonials-rate">
            ${estrelas}
            </div>

            <blockquote class="testimonial-quote">${item.mensagemServico}</blockquote>
            <div class="testimonial-author">
                <div class="author-avatar">
                    <img src="assets/img/img-padrao-testemunhas.avif" alt="Imagem de um cliente">
                </div>
                <div class="author-info">
                    <h3>${item.nomeTestemunha}</h3>
                    <p>Cliente desde ${item.ano}</p>
                </div>
            </div>
            <a/>
      </div>
      `;
    wrapper.insertAdjacentHTML("beforeend", card);
  });
  //cria o swiper
  if (typeof swiperTestemunhas === "function") {
    swiperTestemunhas();
  }
}
