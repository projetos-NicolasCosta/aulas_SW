<?php
    $valor = $_REQUEST['valor'];

    function n($n){
        for($i=1;$i<=$n;$i++){
            for($a=1;$a<=$i;$a++){
                echo "$a ";
            }
            echo "<br>";
        }
    }
    n($valor);
?>