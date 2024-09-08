document.querySelector("header .account span img").addEventListener("click", function () {
    var menu = document.querySelector("#submenu");
    var seta = document.querySelector("header .account span img");

    if (menu.style.opacity != "1") {
        menu.style.opacity = "1";
    } else {
        menu.style.opacity = "0";
    }

})

//mostrar menu lateral
document.getElementById("showMenu").addEventListener("click", function () {
    var menuMoba = document.getElementById("menuMobile");

    if (menuMoba.style.display != "block") {
        menuMoba.style.display = "block";
    } else {
        menuMoba.style.display = "none";
    }
})

//fechar menu lateral
document.getElementById("icon-close").addEventListener("click", function () {
    var menu = document.getElementById("menuMobile");
    if (menu.style.display != "none") {
        menu.style.display = "none";
    }
})

// Evento de redimensionamento da tela
window.addEventListener("resize", function () {
    var menuMoba = document.getElementById("menuMobile");
    var screenWidth = window.innerWidth;

    // Se a largura da tela for maior que 747px, esconder o menu mobile
    if (screenWidth > 747 && menuMoba.style.display == "block") {
        menuMoba.style.display = "none";
    }
});

//submenu de inventário aparece
document.getElementById("seta-icon").addEventListener("mouseover", function () {
    var submenuInventario = document.getElementById("inventario-sub-menu");
    submenuInventario.style.display = "flex";
})

document.getElementById("inventario-sub-menu").addEventListener("mouseleave", function () {
    this.style.display = "none";
});

//mostrar Caixa de Dialogo Didatico
document.querySelector("#btn-dialog-didatico").addEventListener("click", function () {
    var dialogoShow = document.querySelector("dialog");
    dialogoShow.showModal();
})

//Fechar Caixa de Dialogo Didatico
document.querySelector("#btn-dialog-close-didatico").addEventListener("click", function () {
    var dialogoClose = document.querySelector("dialog");
    dialogoClose.close();
})


//mostrar Caixa de Dialogo Mobilia
document.querySelector("#btn-dialog-mobilia").addEventListener("click", function () {
    var dialogoShow = document.querySelector("#dialogoMobilia");
    dialogoShow.showModal();
})

//Fechar Caixa de Dialogo Mobilia
document.querySelector("#btn-dialog-close-mobilia").addEventListener("click", function () {
    var dialogoClose = document.querySelector("#dialogoMobilia");
    dialogoClose.close();
})


