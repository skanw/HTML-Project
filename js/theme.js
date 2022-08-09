
    const themeSelect = document.getElementById("themeSelect");
    const themeStylesheet = document.getElementById("themeStylesheet");
    const currentTheme = localStorage.getItem("theme") || "style";

    function activateTheme(themeName){
        themeStylesheet.setAttribute("href", `css/${themeName}.css`);
    }

    themeSelect.addEventListener("change", () =>{
        activateTheme(themeSelect.value);
        localStorage.setItem("theme", themeSelect.value);
    });

    themeSelect.value = currentTheme;
    activateTheme(currentTheme);

