<?php

function counter(){
    static $number=0;
    $number++;
    echo "numri eshte: $number.<br>";
}

counter();
counter();
counter();
?>