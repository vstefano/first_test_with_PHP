
<h2>GENERA LA TUA PASSWORD</h2>

<form action="generaPassPHP.php" method="GET">
    <p>Inserisci il nome sito: <input type="text" name="name" value="<?php echo $_GET['name'] ?>" /></p>
    <p><input type="submit"></p>
</form>
</br> <p>Sito:  <?php echo $_GET['name'] ?> </p> </br> </br>

<!--ACQUISIZIONE LUNGHEZZA PASSWORD-->

<form action="generaPassPHP.php" method="GET">
    <p>Dimensione della password: <input type="text" name="dim" value="<?php echo $_GET['dim'] ?>" /></p>
    <input type="hidden" name="name" value="<?php echo $_GET['name'] ?>"  />
    <p><input type="submit"></p>
</form>
</br> <p>Dimensione password:  <?php echo $_GET['dim'] ?> </p> </br> </br>


<?php

$pass="";
$dimensione=$_GET['dim'];
echo "Dimensione: ".$dimensione."</br>";

for($i=0;$i<$dimensione/2;++$i){
    $pass=$pass . rand(0,9);
}
echo "Password con numeri: ". $pass."</br>";

for($i=0;$i<$dimensione/2;++$i){
   echo chr(rand(65,90))." </br>";
}
//echo " test : ".chr(69)."</br>";
echo "Password completa: ". $pass."</br>";
?>
