const carousel = document.querySelector(".carousel");
let cartes = document.querySelectorAll(".carte");
let boutonNavGauche = document.querySelector(".scrollGauche");
let boutonNavDroite = document.querySelector(".scrollDroite");
let position = 0;
const MARGIN_CARTES = 20;
let widthWindow;
let limiteNav;
//Écoute le bouton droite et gère la navigation de droite
boutonNavDroite.addEventListener("click", function () {
  calculerLimiteNav();
  let widthCarte = cartes[0].offsetWidth;
  console.log(limiteNav);
  if (position != limiteNav) {
    position--;
    cartes.forEach((carte) => {
      carte.style.transform = `translateX(${
        (widthCarte + MARGIN_CARTES) * position
      }px)`;
      console.log(carte.style.transform);
    });
  }
  console.log(position);
});
//Écoute le bouton gauche et gère la navigation de gauche
boutonNavGauche.addEventListener("click", function () {
  let widthCarte = cartes[0].offsetWidth;
  if (position != 0) {
    position++;
    cartes.forEach((carte) => {
      carte.style.transform = `translateX(${
        (widthCarte + MARGIN_CARTES) * position
      }px)`;
      console.log(carte.style.transform);
    });
  }
  console.log(position);
});
//Reset la position des cartes lors d'un redimensionnenent de la page
window.addEventListener("resize", function () {
  cartes.forEach((uneCarte) => {
    uneCarte.style.transform = `translateX(0px, 0px)`;
    position = 0;
    console.log("resize");
  });
});
//Fonction détermine combien de fois un peu cliquer sur le bouton de droite pour naviguer
function calculerLimiteNav() {
  let widthWindow = window.innerWidth;
  if (widthWindow >= 768) {
    limiteNav = -2;
  } else if (widthWindow > 576 && widthWindow <= 767) {
    limiteNav = -4;
  } else {
    limiteNav = -5;
  }
}
