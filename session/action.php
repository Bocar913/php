<?php

if (isset($_POST['login'], $_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login == "admin" && $password == "admin") {
        session_start();
        $_SESSION["login"] = $login;
        $_SESSION["password"] = $password;
        header("Location: admin.php");
    }
    else {
        header("Location: formulaire.php?error=1");
    }
} else {
    header("Location: formulaire.php?error=2");
}
