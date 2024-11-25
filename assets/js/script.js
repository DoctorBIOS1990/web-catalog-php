var originalTitle = document.title;

// Separa el texto antes y después del guion "-"
var splitTitle = originalTitle.split('-');
var firstPart = splitTitle[0].trim();
var secondPart = " ** " + splitTitle[1].trim();

function moveTitle() {
    secondPart = secondPart.substring(1) + secondPart.charAt(0);
    document.title = firstPart + " - " + secondPart;
}

setInterval(moveTitle, 400);



const alertGame = () => { 
    alert('Puede que el nombre del juego del catálogo no coincida con el nombre del juego en el sitio, rectifique la búsqueda dentro del sitio de Juegos.');
}  

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () =>{
    navlist.classList.toggle('open');
    if (menu.innerHTML == "x") { 
        menu.innerHTML = "≡"
    }else menu.innerHTML = "x";
}

window.onscroll = () =>{
    navlist.classList.remove('open');
    if (menu.innerHTML == "x") { 
        menu.innerHTML = "≡"
    }
}

