<?php

$vet_monodimensionale=array(1,2,3,4,5);
$somma=0;

foreach($vet_monodimensionale as $valore){
    echo "elemento attuale vettore: ".$valore."</br>";
    $somma+=$valore;
}
    echo "la somma di tutti gli elementidel vettore è: ".$somma;


/*$array_monodimensionale = array(1, 2, 3, 4, 5);

$somma = 0;
foreach ($array_monodimensionale as $valore) {
    $somma += $valore;
}

echo "La somma degli elementi dell'array è: " . $somma;*/


$eta_utenti = array(          //ARRAY MULTIDIMENSIONELE
    'Simone' => 29,
    'Josephine' => 30,
    'Giuseppe' => 23,
    'Renato' => 26,
    'Gabriele' => 24
);

$somma_eta = 0;
foreach ($eta_utenti as $nome => $eta) {
    echo "L'utente " . $nome . " ha " . $eta . " anni\n";
    $somma_eta += $eta;
}

echo "La somma delle età degli utenti è: " . $somma_eta;




?>