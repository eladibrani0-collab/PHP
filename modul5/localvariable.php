<?php
//local,global,static variables
//local-
//global-e krijon variablenm dhe munet me perdor ne gjithe boten
//static-ruhet vlera meniher pasi ekzikutohet programi

$x=3;
function local(){
    $y=5;
    echo "$y";
}
local();
echo "$x";
?>
