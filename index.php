<?php
    require('electric.php');
    
    $avanza = new car('Avanza');
    
    echo "Merek : " . $avanza->merek . "<br>";
    echo "Roda : " . $avanza->roda . "<br>" ;
    echo "spion : " . $avanza->spion . "<br>" ;
    echo "bahanbakar : " . $avanza->bahanbakar . "<br> <br>";

    $xenia = new car('xenia');
    
    echo "Merek : " . $xenia->merek . "<br>";
    echo "Roda : " . $xenia->roda . "<br>" ;
    echo "spion : " . $xenia->spion . "<br>" ;
    echo "bahanbakar : " . $xenia->bahanbakar . "<br> <br>";

    $tesla = new Electric('tesla');

    echo "Merek : " . $avanza->merek . "<br>" ;
    echo "Roda : " . $avanza->roda . "<br>" ;
    echo "spion : " . $avanza->spion . "<br>" ;
    echo $tesla->jalan(500) . "<br>" ;

?>