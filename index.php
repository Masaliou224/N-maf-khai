

    




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de logement</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <h1>N'mafôkhai</h1>
        <nav>
            <a href="index.php" class="nav">Acceuil</a>
            <a href="#" class="nav">Service</a>
            <a href="utilisateur.php" class="nav">Mon espace</a>
        </nav>
    </header>

    


    <main id="contenu">
        <section >
            <h2 class="affiche1">Trouver votre maison/locataire en un click !</h2>
            <p class="text1">Nous vous facilitons la mise en rélation avec votre prochain(e) propriétaire/locataire.</p>
            <div class="global1">
                <div class="cleta">
                    <img src="images/Clet1.jpg" alt="Image d'une clet de maison" class="image1a">
                    <button class="cleta1"><a href="formulaireloca.php">Je cherche une maison</a></button>
                </div>
                <div class="cletb">
                    <img src="images/istockphoto-1335296835-1024x1024.jpg" alt="Image d'une personne proposant une clet" class="image1b">
                    <button class="cletb1"><a href="#">Je propose une location</a></button>
                </div>
            </div>
        </section>
        <section class="section2">
            <h2 class="affiche2">Les annonces en cours :</h2>
            <p class="text2">Rétrouver ici les annonces encore disponibles avec des offres alléchantes.</p>
            <div class="global2">
                <div class="div1">
                    <a href="#"><img src="images/istockphoto-1398814566-1024x1024.jpg" alt="Image d'un appart meublé" class="image2">
                    <div class="cadre">
                        <p>Appartement 32m2</p>
                        <p>Meublé, accet facile</p>
                        <p>Dixinn terasse</p>
                    </div>
                    </a>
                </div>
                <div class="div2">
                    <a href="#"><img src="images/istockphoto-1357211266-1024x1024.jpg" alt="Image d'un apart qui n'est pas meublé" class="image2">
                    <div class="cadre">    
                        <p>Appartement 34m2</p>
                        <p>Non meublé</p>
                        <p>Kissosso plateau</p>
                    </div>
                    </a>
                </div>
                <div class="div3">
                    <a href="#"><img src="images/istockphoto-1365649825-1024x1024.jpg" alt="Image d'un studio" class="image2">
                    <div class="cadre">
                        <p>Appartement 22m2</p>
                        <p>Meublé, au bord de la route</p>
                        <p>Coleah impirmerie</p>
                    </div>
                    </a>
                </div>
                
            </div>
            <button class="l_btn"><a href="./annonces.html">+ d'offres de locations</a></button>
        </section>
        <section class="section3">
            <div class="global3">
                <div class="img_deroulante">
                    <div class="deroulante">
                        <img src="images/img6.jpg" alt="">
                        <img src="images/img7.jpg" alt="">
                        <img src="images/img8.jpg" alt="">
                    </div>
                    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="next" onclick="moveSlide(1)">&#10095;</button>
                    
                </div>
                <div class="txt_profil">
                    <p>Créer votre dossier locataire/proprietaire/professionnel de l'immobilier complet et laisser la magie s'opperer.</p>
                    <p>Votre logement en click !</p>
                    <button><a href="#">Créer un profil</a></button>
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
            <a href="#">Le guide du proprietaire</a> <br>
            <a href="#">Le guide du locataire</a>
        </div>
        <div class="folow_us">
            <h3>Nous suivre :</h3>
            <a href="#"><img src="images/facebook.png" alt="loge de facebook" width="20px" height="20px"></a>
            <a href="#"><img src="images/Linkedin.png" alt="loge de Linkedin" width="20px" height="20px"></a>
        </div>
        <div class="button">
            <button><a href="./formulaireloca.php">Je suis locataire</a></button><br>
            <button><a href="./formpro.html">Je suis proprietaire</a></button><br>
            <button><a href="./about.php">A propos de nous</a></button><br>
        </div>
        <div class="droits">
            <a href="#">Mentions légales</a><br>
            <a href="#">2024 dffiff, Inc. Tous droits réservés.</a>
        </div>
    </footer>

    <script src="/js/script.js"></script>

</body>
</html>