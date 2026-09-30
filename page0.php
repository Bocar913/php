<?php

setcookie("page","vous venez de la page 0");
if (isset($_COOKIE["page"])){
    echo "<p>le cookie page est : <b>".$_COOKIE["page"]."</b></p>";
    setcookie("page","vous venez de la page 0");
}

echo "<h1>vous êtes sur la page 0</h1>";
echo"<p><a href='page1.php'>vers la page  1</a></p>";
echo"<p><a href='page2.php'>vers la page  2</a></p>";

