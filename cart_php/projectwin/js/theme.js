const themeSelect = document.getElementById('themeSelect');
const themeStylesheet = document.getElementById('themeStylesheet');

themeSelect.addEventListener("change",function(){
    themeStylesheet.setAttribute("href","css/" + this.value + ".css");
})