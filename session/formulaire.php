<?php
echo "<form action='action.php' method='post'>
<label for='login'>Login</label>
<input type='text' name='login' id='login' placeholder='Login'>
<label for='password'>Mot de passe</label>
<input type='password' name='password' id='password' placeholder='Mot de passe'>
<input type='submit' value='Valider'>
</form>";

if (isset($_GET["error"])) {
    if ($_GET["error"] == "1") {
        echo "Erreur : login ou mot de passe incorrect";
    }else if ($_GET["error"] == "2") {
        echo "Erreur : login ou mot de passe incorrect";
    }
}