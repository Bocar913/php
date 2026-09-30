<?php
include("fragments/entre.html");


echo "<table>";
for($i = 0; $i < 8; $i++){
    echo "<tr>";
    for($j = 0; $j < 8; $j++){
        if($i+$j%8==0){
            echo "<td id='noir'> </td>";
        }
        else{
            echo "<td> </td>";
        }
    }
    echo "</tr>";
}
echo "</table>";


