function dark (){ //Botão cor tema
    document.getElementById('cor').innerHTML = ("<link rel='stylesheet' type='text/css' href='stylesheets/style-dark.css'/><button onclick='light()'>Light</button>")
}
function light (){
    document.getElementById('cor').innerHTML = ("<link rel='stylesheet' type='text/css' href='stylesheets/style.css'/><button onclick='dark()'>Dark</button>")
}function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}