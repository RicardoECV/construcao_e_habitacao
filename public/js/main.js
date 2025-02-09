// Imagem do Toggler da Navbar Mobile
var comutar = false;

function switchImg() {
  let img_toggler = document.querySelector(".img-toggler");

  if(!comutar) {img_toggler.src = "public/images/buttons_icons/closeMenu.svg";}
  else {img_toggler.src = "public/images/buttons_icons/menu.svg";} 
  comutar = !comutar;
}

// Scroll Click Empreendimento
const EMPREENDIMENTO = document.querySelector(".empreendimento");

function clickEmpreendimentos() {EMPREENDIMENTO.click();}

function scrollEmpreendimento() { 
  EMPREENDIMENTO.scrollIntoView();
  setTimeout(clickEmpreendimentos, 750);  
}

function scrollTitulo() { 
  let separador_main = document.querySelector(".separador-main");
  
  if(!(pagina_actual == "index") && scroll_destaques){    
    setTimeout(function() {separador_main.scrollIntoView();}, 150);
  }   
}

// Executar
scrollTitulo();