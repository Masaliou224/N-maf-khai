<?php 
include 'check_auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les annonces</title>
    <link rel="stylesheet" href="./css/annonces.css">
</head>
<body>
    <header>
        <h1>N'mafôkhai</h1>
        <nav>
            <a href="index.php" class="nav">Acceuil</a>
            <a href="#" class="nav">Service</a>
            <a href="utilisateur.html" class="nav">Mon espace</a>
        </nav>
    </header>
    
    <div class="global2">
        <div class="annonce">
            <a href="#">
                <img src="images/istockphoto-1398814566-1024x1024.jpg" alt="Image d'un appart meublé" class="image2">
                <div class="cadre">
                    <p>Appartement 32m2</p>
                    <p>Meublé, accet facile</p>
                    <p>Dixinn terasse</p>
                </div>
            </a>
        </div>
        <div class="annonce">
            <a href="#">
                <img src="images/istockphoto-1357211266-1024x1024.jpg" alt="Image d'un apart qui n'est pas meublé" class="image2">
                <div class="cadre">    
                    <p>Appartement de 34m2</p>
                    <p>Non meublé</p>
                    <p>Kissosso plateau</p>
                </div>
            </a>
        </div>
        <div class="annonce">
            <a href="#">
                <img src="images/istockphoto-1365649825-1024x1024.jpg" alt="Image d'un studio" class="image2">
                <div class="cadre">
                    <p>Studio 22m2</p>
                    <p>Meublé, au bord de la route</p>
                    <p>Coleah imprimerie</p>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
