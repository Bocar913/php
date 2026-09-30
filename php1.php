<?PHP
include("fragments/entre.html");
?>
<h1>Travaux pratiques PHP numéro2</h1>
<h2>Affectation par réference</h2>
<?PHP
//appel d'une fonction
require_once("fun/function.php");
?>
<?PHP
$a=5; 	//$b est affecté par réference
$b=&$a;
echo "la valeur de \$a est : ".$a;
echo "&nbsp; la valeur de \$b est : ".$b;
echo "<br>";
$a=7;
echo "la valeur de \$a est : ".$a;
echo "&nbsp; la valeur de \$b est : ".$b;
echo "<br>";
$a=9;
echo "la valeur de \$a est : ".$a;
echo "&nbsp; la valeur de \$b est : ".$b;
echo "<br>";

?>

<h2>Opérateur de fusion nulle ou NULL</h2>
<?php 
//if $d == null alors "rien"
echo "La valeur de \$d est : ".($d ?? "rien");
$d = "administrateur";
echo "<br>";
echo "La valeur de \$d est : ".($d ?? "rien");
echo "<br>";
echo "La valeur de \$d est : ".($e ?? $f ?? "rien");

?>
<h2>Opérateur d'affectation de fusion nulle</h2>
<?PHP
$g ??="rien";
echo "La valeur de \$g est : ".$g;
$g = "toto";
echo "<br>";
echo "La valeur de \$g est : ".$g;

?>

<h2>Opérateur ternaire</h2>
<?PHP
//ternaire : if then else
$nom="";
echo "Bonjour : ".($nom == '' ? 'inconnu': $nom);
echo "<br>";
$nom="toto";
echo "Bonjour : ".($nom == '' ? 'inconnu': $nom);
?>

<h2>Les tableaux en PHP</h2>
<?PHP
$tab=array(1,4,5,6,7,2,8,9);
for ($i=0;$i<count($tab);$i++) {
	echo $tab[$i];
	echo "<br>";
}		
echo " ----	<br>";
foreach($tab as $val){
	echo $val;
	echo "<br>";
}

//tableau associatif 
$tab = array("lundi"=>1,"mardi"=>2,"mercredi"=>3);
foreach($tab as $key => $val){
	echo "la clé est : ".$key;
	echo " et la valeur est : ".$val;
	echo"<br>";
}
?>
<?PHP
//appel d'une fonction
include("fragments/footer.html");
?>
