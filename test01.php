
<html>
<head>
    <title>Test PHP</title>
</head>
<body>
<?php echo "Hello World!<p>"; ?>

<?php

if(strlen($_GET['name']) > 0){
    ?>
    </br> hello! <?php echo $_GET['name'] ?>  </br> </br>
    <?php
}else{
    ?>
    <form action="test01.php" method="GET">
        <p>Il tuo Nome: <input type="text" name="name" value="" /></p>
        <p><input type="submit"></p>
    </form>
    <?php
}


?>
</body>
</html>

<?php
echo $_SERVER["HTTP_USER_AGENT"];
?>







