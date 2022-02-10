<footer>
    <!-- Contact -->
    <div>
        <h2><?= $contact['titre'][0]; ?></h2>
        <div class="informations italic">
            <p>
                <img src="images/icones/fontawesome/svgs/solid/phone-alt.svg" alt="" /><?= $contact['telephone'][0]; ?>
            </p>
            <p>
                <img src="images/icones/fontawesome/svgs/solid/address-book.svg" alt="" /><?= $contact['codePostal'][0]; ?>
            </p>
            <p>
                <img src="images/icones/fontawesome/svgs/solid/home.svg" alt="" /><?= $contact['adresse'][0]; ?>
            </p>
        </div>
    </div>
    <!-- Réseaux Sociaux -->
    <div>
        <h2><?= $reseauxSociaux['titre'][0]; ?></h2>
        <div class="informations italic">
            <p>
                <img src="images/icones/fontawesome/svgs/brands/instagram.svg" alt="" /><?= $reseauxSociaux['instagram'][0]; ?>
            </p>
            <p>
                <img src="images/icones/fontawesome/svgs/brands/twitter.svg" alt="" /><?= $reseauxSociaux['twitter'][0]; ?>
            </p>
        </div>
    </div>
    <!-- Embauchement -->
    <div>
        <h2><?= $embauche['titre'][0]; ?></h2>
        <div class="informations italic">
            <p><?= $embauche['cv'][0]; ?></p>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="js/navigation.js"></script>
<script src="js/gererCarousel.js"></script>
</body>

</html>