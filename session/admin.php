<?php
session_start();
if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    if ($login == "admin") {
        echo"<h1>Bonjour ".$login."</h1>";
        echo "<p><a href='logout.php'>deconnexion</a>";
    } else {
        header("Location: formulaire.php?error=2");
    }
} else {
    header("Location: formulaire.php?error=2");
}