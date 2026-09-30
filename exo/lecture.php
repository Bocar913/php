<?php
$file="fichier.txt";
$fp=fopen($file,"r");
/*
 * r = read, mode lecture simple, pointeur placé au début du fichier
 * w = write, mode écriture simple, pointeur placé au début du fichier
 * a = apend, mode lecture/ecriture... Pointeur placé à l a fin du fichier
*/
while(!feof($fp)){
    $data=fgets($fp);
    print_r($data);
    echo"<br>";
}

fclose($fp);

$fp=fopen($file,"r");
$data=fread($fp,filesize($file));
print_r($data);
fclose($fp);

$fp=fopen($file,"a");
$texte="Bye bye bye \r";
fputs($fp,$texte);
fclose($fp);

