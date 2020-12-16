<?php
$x=25;
$y=20;
function mytest(){
    $GLOBALS[x]= $GLOBALS[x]+ $GLOBALS[y];
}
mytest();
echo  ($x)
?>
