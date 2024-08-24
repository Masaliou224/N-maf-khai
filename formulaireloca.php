
<?php
    session_start();
    // Include connexion file
    require_once "db.php"; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $genre = $_POST['genre'];
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $user_type = htmlspecialchars($_POST['user_type']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
    
        if ($password === $confirm_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
            $stmt = $pdo->prepare("INSERT INTO locataire (nom, prenom, email, tel, user_type, password) VALUES (:nom, :prenom, :email, :tel, :user_type, :password)");
            // $stmt->bindParam(':genre', $genre);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':user_type', $user_type);
            $stmt->bindParam(':password', $hashed_password);
    
            if ($stmt->execute()) {
                // Registration successful, redirect to login page
                header("Location: connexion.php");
                exit;
            } else {
                echo "Erreur lors de l'inscription.";
            }
        } else {
            echo "Les mots de passe ne correspondent pas.";
        }
    }
    ?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire locataire:</title>
    <link rel="stylesheet" href="./css/inscription.css">
</head>
<body>
    





    <div class="form_global">
        <div>
            <h1>Bienvenu sur N'mafôkhai.com</h1>
            <div class="p">Inscription</div>
            <div class="p">
                "Vous avez déjà un compte?"
                <a href="connexion.php">Se connecter</a>
            </div>
            <div class="p">Renseignez ces informations pour créer votre compte</div>

            <div class="form">
                <form action="" method="POST">
                    
                    <div class="form_groupe">
                        <select name="genre" id="genre" class="form_control">
                            <option value="M.">M.</option>
                            <option value="Mme.">Mme.</option>
                        </select>
                    </div>
                    <div class="form_groupe">
                        <input type="text" name="nom" id="nom" placeholder="Nom" required class="form_control">
                    </div>
                    <div class="form_groupe">
                        <input type="text" name="prenom" id="prenom" placeholder="Prénom" required class="form_control">
                    </div>
                    <div class="form_groupe">
                        <input type="email" name="email" placeholder="adress@email.com" id="email" required class="form_control">
                    </div>
                    <div class="form_groupe">
                        <input type="tel" name="tel" id="tel" placeholder="Téléphone" required class="form_control">
                    </div>
                    <div class="form_groupe">
                        <select name="user_type" id="user_type" class="form_control" required>
                            <option value="tenant">Locataire</option>
                            <option value="owner">Propriétaire</option>
                        </select>
                    </div>
                    <div class="form_groupe">
                        <input type="password" name="password" placeholder="Mots de passe" id="password" required class="form_control">
                    </div>
                    <div class="form_groupe">
                        <input type="password" name="confirm_password" placeholder="Confirmer le mots de passe" id="confirm_password" required class="form_control">
                    </div>
                    
                    <div class="form_groupe">
                        <input type="submit" value="Valider" name="button"  class="form_control"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>