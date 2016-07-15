
<?php
echo "GENERA LA TUA PASSWORD";

//ACQUISIZIONE NOME SITO

if(strlen($_GET['name']) > 0){
    ?>
    </br> Il sito su cui userai la password è:  <?php echo $_GET['name'] ?>  </br> </br>
    <?php
}else{
    ?>
    <form action="generaPassPHP.php" method="GET">
        <p>Inserisci il nome del sito sul quale userai la password: <input type="text" name="name" value="" /></p>
        <p><input type="submit"></p>
    </form>
    <?php
}//Fine else
?>

<!--ACQUISIZIONE LUNGHEZZA PASSWORD-->

<?php
if(strlen($_GET['dim']) >0){
    ?>
    </br><p> hai scelto una dimensione di: <?php echo $_GET['dim']?> per la password</p>
    <?php
}else{
    ?>
    <form action="generaPassPHP.php" method="GET">
        <p>Inserisci la dimensione desiderata per la password: <input type="text" name="dim" value="" /></p>
        <p><input type="submit"></p>
    </form>
    <?php
}//Fine else
?>


<?php
//CREAZIONE PASSWORD

$pass="";
$dimensione=$_GET['dim'];
echo $dimensione;



for($i=0;i<$dimensione/2;++$i){
    pass.rand(0,9);
}
echo "attualmente la tua password è: ".$pass ;


?>
