<?php
include('includes/entete.php');
?>
<!-- Contenu de la page -->
<main>
  <!-- Vitrine du site -->
  <section id="presentation">
    <div class="elementsPresentation">
      <div class="titre">
        <h2 class="italic">VÉLO</h2>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0
                                                                                                                                                                                                                                                                                                                                                                                                                                                0
                                                                                                                                                                                                                                                                                                                                                                                                                                                212.61
                                                                                                                                                                                                                                                                                                                                                                                                                                                284.33">
          <defs>
            <style>
              .cls-1,
              .cls-2 {
                stroke: #231f20;
                stroke-miterlimit: 10;
              }

              .cls-2 {
                fill: #55c2b3;
              }

              .cls-3 {
                font-size: 161.83px;
              }

              .cls-3,
              .cls-4 {
                fill: #fff;
                font-family: TeluguMN, Telugu MN;
              }

              .cls-4 {
                font-size: 161.83px;
              }

              .cls-5 {
                fill: #231f20;
              }
            </style>
          </defs>
          <g id="Layer_2" data-name="Layer
                                                                                                                                                                                                                                                                                                                                                                                                                                                    2">
            <g id="Layer_1-2" data-name="Layer
                                                                                                                                                                                                                                                                                                                                                                                                                                                        1">
              <path class="cls-1" d="M.51,34.76S42.87.5,107.43.5,212.09,34.76,212.09,34.76c-19.2,199-105.79,213.08-105.79,213.08S10.49,229.77.51,34.76Z" />
              <path class="cls-2" d="M107.24,21.54C53.66,21.54,18.51,50,18.51,50,26.79,211.81,106.3,226.8,106.3,226.8S178.16,215.09,194.09,50C194.09,50,160.82,21.54,107.24,21.54Z" />
              <text class="cls-3" transform="translate(45.88
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    178.06)">
                V
              </text>
              <text class="cls-4" transform="matrix(0.91,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    0.4,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    -0.4,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    0.91,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    97.3,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    171.58)">
                I
              </text>
              <path class="cls-5" d="M129.29,52.67S118.62,57.59,117.8,56c-.61-1.22-.77-7.42,0-10.87-2,2.5-5.48,5.94-6.52,4.51-1.65-2.26-4.93-19.5-4.93-19.5s-3.28,17.24-4.93,19.5c-1,1.43-4.55-2-6.52-4.51.72,3.45.56,9.65,0,10.87-.82,1.64-11.49-3.28-11.49-3.28l6.36,6.16s-2,13.13,1.23,9.23,15.4-6.77,15.4-6.77,12.11,2.87,15.4,6.77,1.23-9.23,1.23-9.23Z" />
              <path class="cls-5" d="M118.82,42.81c-.47.22-.82,1.08-1.07,2.27C118.88,43.64,119.5,42.51,118.82,42.81Z" />
              <path class="cls-5" d="M93.78,42.81c-.68-.3-.06.83,1.07,2.27C94.6,43.89,94.25,43,93.78,42.81Z" />
            </g>
          </g>
        </svg>
        <h2 class="italic">INTEMPOREL</h2>
      </div>
      <div class="navSecondaire">
        <a href="#heures">
          <p><?= $boutonHeures; ?></p>
        </a>
        <a href="#lieu">
          <p><?= $boutonLieu; ?></p>
        </a>
      </div>
    </div>
  </section>
  <!-- Vélos diponibles -->
  <section id="velos">
    <h2><?= $titreVelo; ?></h2>
    <button class="scrollGauche scrollButton">
      < </button>
        <button class="scrollDroite scrollButton">></button>
        <div class="carousel">
          <div class="carte">
            <img src="images/velos/veloElectrique.jpg" alt="Vélo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        électrique" />
            <p class="typeVelo italic"><?= $veloElectrique; ?></p>
          </div>
          <div class="carte">
            <img src="images/velos/veloHybride.jpg" alt="Vélo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        hybride" />
            <p class="typeVelo italic"><?= $veloHybride; ?></p>
          </div>
          <div class="carte">
            <img src="images/velos/veloMontagne.jpg" alt="Vélo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        de
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        montagne" />
            <p class="typeVelo italic"><?= $veloMontagne; ?></p>
          </div>
          <div class="carte">
            <img src="images/velos/veloRoute.jpg" alt="Vélo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        de
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        route" />
            <p class="typeVelo italic"><?= $veloRoute; ?></p>
          </div>
          <div class="carte">
            <img src="images/velos/veloUnevitesse.jpg" alt="Vélo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        une
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        vitesse" />
            <p class="typeVelo italic"><?= $veloFixe; ?></p>
          </div>
          <div class="carte">
            <img src="images/velos/veloVille.jpg" alt="Vélo
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        de
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ville" />
            <p class="typeVelo italic"><?= $veloVille; ?></p>
          </div>
        </div>
  </section>
  <!-- Localistaion du magasin -->
  <section id="lieu">
    <h2><?= $titreLieu; ?></h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.0410756438646!2d-73.59311278469845!3d45.54949923576906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc919502452ca81%3A0xdc03da2c70ea2d7e!2sV%C3%A9lo%20Intemporel!5e0!3m2!1sfr!2sca!4v1637856697033!5m2!1sfr!2sca" width="600" height="450" style="border: 0" allowfullscreen="true" loading="lazy"></iframe>
    <p class="extraBold"><?= $contact['adresse'][0]; ?></p>
  </section>
  <!-- Heures d'ouvertures -->
  <section id="heures">
    <h2><?= $titreHoraire; ?></h2>
    <div class="heuresOuvertureContainer italic">
      <div class="jour"><span class="extraBold"><?= $horaire['lundi'][0]; ?></span><?= $horaire['lundi'][1]; ?></div>
      <div class="jour">
        <span class="extraBold"><?= $horaire['mardi'][0]; ?></span><?= $horaire['mardi'][1]; ?>
      </div>
      <div class="jour">
        <span class="extraBold"><?= $horaire['mercredi'][0]; ?></span><?= $horaire['mercredi'][1]; ?>
      </div>
      <div class="jour">
        <span class="extraBold"><?= $horaire['jeudi'][0]; ?></span><?= $horaire['jeudi'][1]; ?>
      </div>
      <div class="jour">
        <span class="extraBold"><?= $horaire['vendredi'][0]; ?></span><?= $horaire['vendredi'][1]; ?>
      </div>
      <div class="jour">
        <span class="extraBold"><?= $horaire['samedi'][0]; ?></span><?= $horaire['samedi'][1]; ?>
      </div>
      <div class="jour">
        <span class="extraBold"><?= $horaire['dimanche'][0]; ?></span><?= $horaire['dimanche'][1]; ?>
      </div>
    </div>
  </section>
</main>
<!-- Footer -->
<?php
include('includes/footer.php')
?>