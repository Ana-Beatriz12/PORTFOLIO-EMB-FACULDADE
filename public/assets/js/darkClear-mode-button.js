document.addEventListener("DOMContentLoaded", () => {
    const inputContainer = document.querySelector(".darkClear-mode input");
    const rootElement = document.documentElement; // pegando o elemento root do html
    const fundoHome = document.querySelector(".section-home");
    const fundoGeral = document.querySelectorAll(".fundo-white-theme");

    const ligthTheme = {
        "--color-fundo": "#fff",
        "--color-White": "#1e1e1e",
        "--color-black": "#fff",
        "--color-red": "#fff",
        "--color-marsala": "#fe6100c1",
    };

    const darkTheme = {
        "--color-fundo": "#1e1e1e",
        "--color-White": "#ffffff",
        "--color-black": "#1e1e1e",
    };

    function applyTheme(isChecked) {

        if (isChecked) {
            changeTheme(darkTheme);
            if (fundoHome) {
                fundoHome.classList.remove("fundo-white-home");
                console.log(fundoHome)
            }

            fundoGeral.forEach((section) => {
                section.classList.remove("fundo-white");
            });
        } else {
            changeTheme(ligthTheme);
            if (fundoHome) {
                fundoHome.classList.add("fundo-white-home");
            }

            fundoGeral.forEach((section) => {
                section.classList.add("fundo-white");
            });
        }
    }

    // APLICA O TEMA INICIAL (escuro)
    applyTheme(inputContainer.checked);

    inputContainer.addEventListener("change", () => {
        applyTheme(inputContainer.checked);
    });

    function changeTheme(theme) {
        // console.log(theme);
        for (let prop in theme) {
            changeProperty(prop, theme[prop]);
        }
    }

    function changeProperty(property, value) {
        rootElement.style.setProperty(property, value); //muda a cor dos elementos!
    }
});

//https://www.youtube.com/watch?v=JrIHtMNJbkU
