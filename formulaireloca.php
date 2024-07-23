
<?php
    session_start();
    require_once('./connexion.php');
    require_once('./function.php');

    if (!empty($_POST)) {

        $errors = [];

        // Pseudo
        if (empty($_POST['nom']) || !preg_match("#^[a-zA-Z0-9_]+$#", $_POST['nom'])) {
            $errors['nom'] = "Votre pseudo n'est pas valide";
        } else {
            // SELECT * FROM users WHERE username = post
            $query = "SELECT * FROM locataire WHERE nom = ?";
            $req = $pdo->prepare($query);
            $req->execute([$_POST['nom']]);
            if ($req->fetch()) {
                $errors['nom'] = "Ce pseudo n'est plus disponible";
            }
        }
        if (empty($_POST['prenom']) || !preg_match("#^[a-zA-Z0-9_]+$#", $_POST['prenom'])) {
            $errors['prenom'] = "Votre pseudo n'est pas valide";
        } else {
            // SELECT * FROM users WHERE username = post
            $query = "SELECT * FROM locataire WHERE prenom = ?";
            $req = $pdo->prepare($query);
            $req->execute([$_POST['prenom']]);
            if ($req->fetch()) {
                $errors['prenom'] = "Ce pseudo n'est plus disponible";
            }
        }

        // Email
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Votre email n'est pas valide";
        } else {
            // SELECT * FROM users WHERE email = post
            $query = "SELECT * FROM locataire WHERE email = ?";
            $req = $pdo->prepare($query);
            $req->execute([$_POST['email']]);
            if ($req->fetch()) {
                $errors['email'] = "Cet email est déjà pris";
            }
        }

        // Password
        if (empty($_POST['password']) || $_POST['password'] !== $_POST['password_confirmed']) {
            $errors['password'] = "Vous devez rentrez un mot de passe valide et confirmé";
        }

        if (empty($errors)) {
            $query = "INSERT INTO lacataire(nom,prenom,email,tel,password,confirmation_token) VALUES(?,?,?,?)";
            $req = $pdo->prepare($query);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $token = generateToken(100);

            $req->execute([$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel'], $password, $token]);
            $userId = $pdo->lastInsertId();

            $mail = $_POST['email'];
            $subject = "Confirmation du compte";
            $message = "Afin de confirmer votre compte,merci de cliquer sur ce lien\n\n
            http://localhost/N'mafôkhai/confirm.php?id=$userId&token=$token";

            mail($mail, $subject, $message);

            $_SESSION['flash']['success'] = "Compte créé avec sucèss. Veillez vérifier votre boite mail afin de confirmer votre compte";

            header("Location: locataire.php");
            exit();
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
                <a href="#">Se connecter</a>
            </div>
            <div class="p">Renseignez ces informations pour créer votre compte</div>
    
            <form action="" method="POST">
                
                <div class="form_groupe">
                    <select name="genre" id="" class="form_control">
                        <option value="M.">M.</option>
                        <option value="Mme.">Mme.</option>
                    </select>
                </div>
                <div class="form_groupe">
                    <input type="text" name="nom" placeholder="Nom" required class="form_control">
                </div>
                <div class="form_groupe">
                    <input type="text" name="prenom" placeholder="Prénom" required class="form_control">
                </div>
                <div class="form_groupe">
                    <input type="email" name="email" placeholder="adress@email.com" id=""required class="form_control">
                </div>
                <div class="form_groupe">
                    <input type="tel" name="tel" placeholder="Téléphone" required class="form_control">
                </div>
                <div class="form_groupe">
                    <input type="password" name="password" placeholder="Mots de passe" id="" required class="form_control">
                </div>
                <div class="form_groupe">
                    <input type="password" name="password_confirmed" placeholder="Confirmer le mots de passe" id="" required class="form_control">
                </div>
                <!-- <fieldset>
                    <div class="check_radio">
                        <div class="form_check">
                            <input type="radio" id="locataire" name="locataire" required class="" value="ROLE_LOCATAIRE" checked>
                            <label for="locataire">locataire</label> 
                        </div>
                        <div class="form_check">
                            <input type="radio" id="proprietaire" name="proprietaire" required class="" value="ROLE_PROPRIETAIRE" checked>
                            <label for="proprietaire">propriétaire</label>
                        </div>
                    </div>
                </fieldset> -->
                <div class="form_groupe">
                    <input type="submit" value="Valider" name="button"  class="form_control"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>