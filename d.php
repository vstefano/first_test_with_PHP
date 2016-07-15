<?php

    echo "TESTE SCOPE GLOBALE:";

  $x="scope globale";


   function test_scope(){
       global $x;
       echo $x;

   }

test_scope();

?>

</br></br></br></br>

<?php

    echo "TEST SCOPE NON STATICO";?>
    </br>
    </br>
<?php
    function test_no_scope(){
        $x=0;
        $x=$x+1;
        echo $x;
    }

    test_no_scope();
    test_no_scope();
    test_no_scope();

?>
<?php

echo "TEST SCOPE STATICO";?>
  </br>
  </br>

<?php
function test_scope2(){
     static $x=0;
    $x=$x+1;
    echo $x;
}

test_scope2();
test_scope2();
test_scope2();

for($i=0;$i<100;$i++){

    echo "ciao</br>";
    if($i%2==0)
        echo " Austremonio!!</br>";
}
?>




