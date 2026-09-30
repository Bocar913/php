<?PHP
include("fragments/entre.html");

$file="data.csv";
$fp=fopen($file,"r");

echo "<table>";
echo "<tr>";
$data=fgetcsv($fp);
foreach($data as $line){
    echo"<th>".$line."</th>";
}
echo "</tr>";
while(($data=fgetcsv($fp))){
    echo "<tr>";
    foreach($data as $line){
        echo "<td>".$line."</td>";
    }
    echo "</tr>";
}

echo "</table>";
fclose($fp);

