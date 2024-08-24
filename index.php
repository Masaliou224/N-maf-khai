

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de logement - N'mafôkhai</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <h1>N'mafôkhai</h1>
        <nav>
            <a href="index.php" class="nav">Accueil</a>
            <a href="#" class="nav">Service</a>
            <a href="locataire.php" class="nav">Mon espace</a>
        </nav>
    </header>

    <main id="contenu">
        <section>
            <h2 class="affiche1">Trouvez votre maison ou locataire en un clic !</h2>
            <p class="text1">Nous facilitons la mise en relation avec votre prochain(e) propriétaire ou locataire.</p>
            <div class="global1">
                <div class="cleta">
                    <img src="images/Clet1.jpg" alt="Image d'une clé de maison" class="image1a">
                    <button class="cleta1"><a href="connexion.php">Je cherche une maison</a></button>
                </div>
                <div class="cletb">
                    <img src="images/istockphoto-1335296835-1024x1024.jpg" alt="Image d'une personne proposant une clé" class="image1b">
                    <button class="cletb1"><a href="connexion.php">Je propose une location</a></button>
                </div>
            </div>
        </section>

        <section class="section2">
            <h2 class="affiche2">Annonces en cours :</h2>
            <p class="text2">Retrouvez ici les annonces encore disponibles avec des offres alléchantes.</p>
            <div class="global2">
                <div class="div">
                    <a href="#">
                        <img src="images/istockphoto-1398814566-1024x1024.jpg" alt="Image d'un appartement meublé" class="image2">
                        <div class="cadre">
                            <p>Appartement 32m²</p>
                            <p>Meublé, accès facile</p>
                            <p>Dixinn Terrasse</p>
                        </div>
                    </a>
                </div>
                <div class="div">
                    <a href="#">
                        <img src="images/istockphoto-1357211266-1024x1024.jpg" alt="Image d'un appartement non meublé" class="image2">
                        <div class="cadre">
                            <p>Appartement 34m²</p>
                            <p>Non meublé</p>
                            <p>Kissosso Plateau</p>
                        </div>
                    </a>
                </div>
                <div class="div">
                    <a href="#">
                        <img src="images/istockphoto-1365649825-1024x1024.jpg" alt="Image d'un studio" class="image2">
                        <div class="cadre">
                            <p>Studio 22m²</p>
                            <p>Meublé, au bord de la route</p>
                            <p>Coleah Imprimerie</p>
                        </div>
                    </a>
                </div>
            </div>
            <button class="l_btn"><a href="./annonces.php">+ d'offres de locations</a></button>
        </section>

        <section class="section3">
            <div class="global3">
                <div class="img_deroulante">
                    <div class="deroulante">
                        <img src="images/img6.jpg" alt="Image de logement 1">
                        <img src="images/img7.jpg" alt="Image de logement 2">
                        <img src="images/img8.jpg" alt="Image de logement 3">
                    </div>
                    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="next" onclick="moveSlide(1)">&#10095;</button>
                </div>
                <div class="txt_profil">
                    <p>Créez votre dossier locataire/propriétaire/professionnel de l'immobilier complet et laissez la magie opérer.</p>
                    <p>Votre logement en un clic !</p>
                    <button class="profil"><a href="formulaireloca.php">Créer un profil</a></button>
                </div>
            </div>
        </section>
    </main>

    <hr>

    <footer class="footer">
        <div class="contact">
            <h3>Contact :</h3>
            <a href="mailto:abalde@simplon.co">Nous contacter</a>
        </div>
        <div class="aide">
            <h3>Aide :</h3>
            <a href="#">Le guide du propriétaire</a><br>
            <a href="#">Le guide du locataire</a>
        </div>
        <div class="follow_us">
            <h3>Nous suivre :</h3>
            <a href="#"><img src="images/facebook.png" alt="Logo de Facebook" width="20" height="20"></a>
            <a href="#"><img src="images/Linkedin.png" alt="Logo de LinkedIn" width="20" height="20"></a>
        </div>
        <div class="button">
            <button><a href="./formulaireloca.php">Je suis locataire</a></button><br>
            <button><a href="./formpro.html">Je suis propriétaire</a></button><br>
            <button><a href="./about.php">À propos de nous</a></button><br>
        </div>
        <div class="droits">
            <a href="#">Mentions légales</a><br>
            <p>2024 N'mafôkhai, Inc. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="./js/script.js"></script>
</body>
</html>
