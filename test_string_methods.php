<?php

$string="ciao";

echo "stringa: ".$string.", lunghezza: ";
echo strlen($string);


echo "</br>"."</br>"."stringa: ".$string.", sottostringa: ai pos inizio sottostringa:";
echo strpos($string,ia);


$data="02/09/2017";
$giorno=substr($data,0,2);
echo "</br>"."giorno:".$giorno;
$mese=substr($data,3,2);
echo "</br>"."mese:".$mese;
$anno=substr($data,6);
echo "</br>"."anno:".$anno;

echo "</br>"."</br>"."stringa $string al contrario: ".strrev($string);


/*echo "</br>"."</br>";
$string2="Marco ha 20 anni";
str_replace(Marco,Luca,$string2);
echo "stringa dopo replace: ".$string2;*/


$stringa = 'Il mio nome è Simone';
echo "</br>".str_replace('Simone', 'Luca', $stringa); // stamperà "Il mio nome è Luca"



?>