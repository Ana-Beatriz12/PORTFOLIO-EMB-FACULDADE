// detalhamento-testemunhas.js
document.addEventListener("DOMContentLoaded", () => {
  carregarTestemunhas();
});

// Função que busca as notícias via PHP
async function fetchTestemunhas() {
  try {
    const response = await fetch("/assets/api/get-testemunhas.php");
    if (!response.ok) throw new Error("Erro ao buscar os dados via php!"); // se a variavel response com a consulta falhar retorna um erro
    console.log("dados recebidos:", response);
    return await response.json(); // se tudo certo, retorna os dados json!
  } catch (error) {
    console.error("Erro no fetch:", error);
    return null;
  }
}

// Função principal que monta o HTML dos cards de serviços!
async function carregarTestemunhas() {
  const data = await fetchTestemunhas(); // chama a função que busca os dados do serviços

  if (!data) return; // se der erro, retorna a consulta novamente.

  console.log("DATA:", data);
  console.log("TESTEMUNHAS:", data.testemunhas);

  const container = document.querySelector(".detalhesTestemunhas");

  data.testemunhas.forEach((testemunha) => {
    let estrelas = "";

    for (let i = 1; i <= 5; i++) {
      if (i <= testemunha.avaliacao) {
        estrelas += `<i class="fa-solid fa-star"></i>`;
      } else {
        estrelas += `<i class="fa-regular fa-star"></i>`;
      }
    }

    container.innerHTML += `
   
      <div class="descricao-testemunha">
          <h1>${testemunha.nomeTestemunha}</h1>

          <div class="testimonials-rate stars">
              ${estrelas}
              ${testemunha.ano}
          </div>

          <p class="conteudo-testemunha">
              ${testemunha.mensagemServico}
          </p>
      </div>
      <hr class="divisor-testemunhas" />
    `;
  });
}
