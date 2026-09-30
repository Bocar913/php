<?php
setcookie("page","vous venez de la page 1");
if (isset($_COOKIE["page"])) {
    echo "<p>le cookie page est : <b>" . $_COOKIE["page"] . "</b></p>";
    setcookie("page", "vous venez de la page 1");
}

echo "<h1>vous êtes sur la page 1</h1>";
echo "<p><a href='page0.php'>vers la page  0</a></p>";
echo "<p><a href='page2.php'>vers la page  2</a></p>";