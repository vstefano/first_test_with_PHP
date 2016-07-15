<!DOCTYPE html>
<html>
<head>
    <title><?php echo "PHP TEST"; ?></title>
</head>
 
<body>
    <?php echo "DATA E ORA:"?>
    Sono le ore <?php echo date('H:i'); ?> </br> del giorno <?php echo date('d/m/Y'); ?>.
</br></br></br>
    <?php
    echo "PROVA STAMPA STRINGA:";

    $nome=simone;
    //METODO1 echo "ciao $nome come stai?"

    echo "ciao " . $nome . " come stai?";

?>
    </br></br></br>
    <?php
    echo "STAMPA SOMMA:";

    function somma($num1,$num2){
        $appo=$num1+$num2;
        return $appo;
    }

    $somma=somma(2,3);
    echo $somma;


    ?>



    </body>


</html>