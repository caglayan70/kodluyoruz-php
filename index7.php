<?php

function ucgen($n){
    for($i=0;$i<=$n;$i++){
        $j=0;
        while($i>=$j){
            echo "O";
            $j++;
        }
        echo "<br>";
    }
}
ucgen(4);

?>