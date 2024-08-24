<?php 
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Fetch user from the database, including user_type
  $stmt = $pdo->prepare("SELECT id, password, user_type FROM locataire WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch();

  if ($user && password_verify($password, $user['password'])) {
    // Password is correct, set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['userid'] = $user['id'];
    $_SESSION['user_type'] = $user['user_type'];  // Fetch the user type

    // Redirect based on user type
    if ($_SESSION['user_type'] == 'tenant') {
      header("Location: locataire.php");
    } elseif ($_SESSION['user_type'] == 'owner') {
      header("Location: proprietaire.php");
    } else {
      // Fallback: if the user_type is neither tenant nor owner
      header("Location: default_profile.php");
    }

    // Optionally redirect to the originally requested page, if available
    // if (isset($_SESSION['redirect_to'])) {
    //   $redirect_url = $_SESSION['redirect_to'];
    //   unset($_SESSION['redirect_to']);
    //   header("Location: ". $redirect_url);
    // } else {
    //   // Otherwise, go to the default profile page
    //   header("Location: locataire.php");
    // }
    exit;
  } else {
    // Invalid credentials
    echo "Invalid email or password.";
  }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./css/connexion.css">
</head>
<body>
    <div class="center">
        <h1>Connexion:</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="email" id="email" name="email"/>
                <span></span>
                <label for="email">Email/Contact:</label>
            </div>
            <div class="txt_field">
                <input type="text" id="password" name="password"/>
                <span></span>
                <label for="password">Password:</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Connexion">
            <div class="signup_link">
                Pas un membre? <a href="formulaireloca.php">S'inscrire</a>
            </div>
             
        </form>
    </div>
</body>
</html>