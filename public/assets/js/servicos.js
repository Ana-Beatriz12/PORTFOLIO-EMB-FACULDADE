// servicos.js
document.addEventListener("DOMContentLoaded", () => {
  carregarServicos();
});

// const response = await fetch("/public/assets/api/get-services.php");

// Função que busca as notícias via PHP
async function fetchServicos() {
  try {
    const response = await fetch("/assets/api/get-services.php");
    if (!response.ok) throw new Error("Erro ao buscar os dados via php!"); // se a variavel response com a consulta falhar retorna um erro
    // console.log("dados recebidos:", response);
    return await response.json(); // se tudo certo, retorna os dados json!
  } catch (error) {
    console.error("Erro no fetch:", error);
    return null;
  }
}

// Função principal que monta o HTML dos cards de serviços!
async function carregarServicos() {
  const data = await fetchServicos(); // chama a função que busca os dados do serviços
  // console.log("DATA:", data);
  // console.log("SERVICOS:", data.servicos);

  if (!data) return; // se der erro, retorna a consulta novamente.

  const wrapper = document.querySelector(".card-list");
  wrapper.innerHTML = ""; // limpa antes de preencher!
  // console.log(wrapper);

  data.servicos.forEach((item) => {
    const card = `
        <li class="card-item swiper-slide panel efeito-surgir-servicos" title="Saiba Mais!" data-video="${item.imagensCardsServicos}" data-title="${item.tituloServico}" data-description="${item.descricaoServico}">
            <div href="" class="card-link">
                <div class="video-thumbnail">
                    <img src="${item.imagensCardsServicos}" class="thumb-img" alt="${item.tituloServico}">
                    <video src="/assets/videos/camera.mp4" class="thumb-video" muted loop></video>
                </div>
                <p class="badge teste1">${item.tituloServico}</p>
                <h2 class="card-title">${item.descricaoServico}</h2>
                <button class="material-symbols-outlined card-button">arrow_right_alt</button>
            </div>
        </li>
        `;
    wrapper.insertAdjacentHTML("beforeend", card);
  });
  //cria o swiper
  // if (typeof swiperServicos === "function") swiperServicos();
  swiperServicos();
  servicesVideos();
}
