<!doctype html>
<html lang="fr">
<head>
<title>index</title>
<meta charset="UTF-8">
</head>

<body>
<h1>Page essai PHP</h1>

<h2>Formulaire en GET</h2>
<form action="" method="get">
<label for="message"> Message : </label>
<input type="number" name="message" id ="message">
<input type="submit" name="OK" value="OK">
</form>

<h2>Formulaire en POST</h2>
<form action="" method="post">
<label for="message"> Message : </label>
<input type="text" name="message" id ="message">
<input type="submit" name="OK" value="OK">
</form>

<?php
if (isset($_GET["message"])){
echo "<pre>";
print_r($_GET);
echo "</pre>";
}

if (isset($_POST["message"])){
echo "<pre>";
print_r($_POST);
echo "</pre>";
}

?>
</body>
</html>