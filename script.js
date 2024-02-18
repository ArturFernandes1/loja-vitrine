/* Função para o submenu ambientes */
document.getElementById("ambientesDropdown").addEventListener("click", function(event) {
    event.preventDefault(); // Impede o link de direcionar para a página
    var dropdownMenu = this.nextElementSibling; // Pega o elemento do submenu

    // Alternar a classe 'show' para mostrar/ocultar o submenu
    if (dropdownMenu.style.display === "block") {
        dropdownMenu.style.display = "none";
    } else {
        dropdownMenu.style.display = "block";
    }
});
