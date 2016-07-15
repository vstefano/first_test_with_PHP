<?php

define('COSTANTE','stringa');
echo COSTANTE;


define('COSTANTENUM',50);
echo "</br>".COSTANTENUM;


echo $_FILE_;



echo "Confronto AND:";
$x=true;
$y=true;
$confronto=$x && $y;
if($confronto==1){
    echo "</br>"."true";
}


echo "</br>"."</br>"."Confronto xor:";

$b=false;
$a=true;

$conf2=$a xor $b;
if($conf2==1){
    echo "</br>"."true";
}else{
    echo"</br>"."false";
}



echo "</br>"."</br>"."Confronto not:";

$n=true;

$conf3=!$n;


if($conf3==1){
    echo "</br>"."true";
}else{
    echo"</br>"."false";
}




echo"</br>"."</br>"."PROVA COSTRUTTO elseif:";
    $nome=Marco;
    $cognome=Verdi;



if ($nome == Luca) {
    echo "bentornato Luca!";
} elseif ($cognome == Verdi) {
    echo "Buongiorno, signor Verdi";
} else {
    echo "ciao $nome!";
}

echo"</br>"."</br>"."PROVA COSTRUTTO switch:";

    $colore=Giallo;

    switch ($colore){
        case rosso:
            echo "colore rosso";
            break;
        case blu:
            echo "colore blu";
            break;
        default:
            echo "nessun colore corrisponde";
            break;
    }



echo "</br>"."STAMPA ELEMENTO VETTORE:";


$list_1=array("marco","luca0");

echo "Il primo elemnto dell'array si chiama:",list_1[0];
echo "Il primo elemento dell'array si chiama {list_1[0]}";





?>



