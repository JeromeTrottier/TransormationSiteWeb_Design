//Gère déplacement du overlay pour changer de langue
let boutonLangue = document.querySelector(".selecteurLangue");
boutonLangue.addEventListener("click", function () {
  let languesDispoContainer = document.querySelector(".languesDisponibles");
  console.log(languesDispoContainer.style.transform);
  if (
    languesDispoContainer.style.transform == "translate(0px, -200px)" ||
    languesDispoContainer.style.transform == ""
  ) {
    languesDispoContainer.style.transform = "translate(0px, 75px)";
  } else {
    languesDispoContainer.style.transform = "translate(0px, -200px)";
  }
});
//Gère déplacement du overlay pour ouvrir la navigation sur mobile
let boutonBurger = document.querySelector(".menuBurgerIcone");
boutonBurger.addEventListener("click", function () {
  let liensBurger = document.querySelector(".liensBurgerMenu");
  if (
    liensBurger.style.transform == "translate(-1000px, 0px)" ||
    liensBurger.style.transform == ""
  ) {
    boutonBurger.setAttribute(
      "src",
      "images/icones/fontawesome/svgs/solid/times.svg"
    );
    liensBurger.style.transform = "translate(0px, 8px)";
  } else {
    boutonBurger.setAttribute(
      "src",
      "images/icones/fontawesome/svgs/solid/bars.svg"
    );
    liensBurger.style.transform = "translate(-1000px, 0px)";
  }
});
