<?php
$x=6;
function mytest()
{ 
    global $x;
    $y=6;
    echo($x+$y);
}
mytest();
?>