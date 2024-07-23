<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon espace locataire</title>
    <link rel="stylesheet" href="/css/locataire.css">
</head>
<body>
    <header>
        <h1>N'mafôkhai</h1>
        <nav>
            <a href="index.html" class="nav">Acceuil</a>
            <a href="#" class="nav">Service</a>
            <a href="utilisateur.html" class="nav">Mon espace</a>
        </nav>
    </header>
    <?php
    session_start();
    require_once './function.php';

    reconnect_auto();
    is_connect();

    
    ?>

    <h1><?= $_SESSION['auth']->prenom ?> +''+ <?= $_SESSION['auth']->nom ?></h1>


    <div class="global padding-top padding-bottom">
        <h1>Mon espace utilisateur</h1>
        <div class="row col-1-4 sm-col-1-2">
            <div class="margin-bottom">
                <a href="#" class="underline" onclick="">
                    <div class="card small-card">
                        <div class="item-icon bg-indigo">
                            <span class="icon">
                                
                            </span>
                        </div>
                        <p class="h4">
                            <b>Mes annonces</b>
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <div class="item-icon bg-indigo">
                            <span>
                                
                            </span>
                        </div>
                        <p>
                            <b>Mes alerts email</b>
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <div class="item-icon bg-indigo">
                            <span>
                                
                            </span>
                        </div>
                        <p>
                            <b>Mon dossier locataire</b>
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="#">
                    <div>
                        <div class="item-icon bg-indigo">
                            <span>
                                
                            </span>
                        </div>
                        <p>
                            <b>Mes abonnements</b>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>