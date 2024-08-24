<?php 

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Store the current URL for redirect after login
  $_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];

  //If not logged in, redirect to the registration page
  header("Location: connexion.php");
  exit;
}
?>