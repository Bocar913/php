<?PHP
include("fragments/entre.html");
?>
<?PHP
//appel d'une fonction
require_once("fun/function.php");
?>
<h2>TP 2-tableau 1</h2>
<?PHP
$caractere=array(1,2,3,4,5,6,7,8,9); // horizontal et vertival
$effectif=array(1,5,6,7,8,9,1,2,4);  
$fonctions=array("moyenne","variance","ecarttype"); // formulaire
?>
<table>
<tr>
<th>caractere</th>
<th>Effecif</th>
</tr>
<?PHP
for ($i=0;$i<count($effectif);$i++){
	echo "<tr><td>$caractere[$i]</td><td>$effectif[$i]</td> </tr>";
}
?>
</table>

<h2>TP 2-tableau 2</h2>

<table>
<tr>
<th>Caractere</th>
<?php
foreach($caractere as $val){
	echo "<td>$val</td>";
}
?>

<tr>
<th>Effectif</th>
<?php
foreach($effectif as $val){
	echo "<td>$val</td>";
}
?>

</tr>
</table>

<h2>formulaire</h2>
<form action="" method="POST">
<label > Statistiques : </label>
<select name="stats">
<?PHP
foreach($fonctions as $val){
	echo "<option value=".$val.">".$val."</options>";
}
?>
</select>
<input type="submit" name="ok" value="Valider">
</form>

<?PHP
//Traitement du formulaire
if (isset($_POST['stats'])){
	$stats=$_POST['stats'];
	switch ($stats){
		case "moyenne":
			echo moyenne($caractere,$effectif);
			break;
		case "variance":
			echo variance($caractere,$effectif);
			break;
		case "ecart-type":
			echo ecarttype($caractere,$effectif);
			break;
	}
}
?>
<?PHP
//appel d'une fonction
include("fragments/footer.html");
?>
