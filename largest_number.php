<?php
$a =4;
$b =5;
$c =6;

if ($a >$b && $a> $c){
    echo "largest number is a=".$a;
}
else if ($b > $a && $b > $c){
    echo "largest number is b=".$b; 
}
else if ($c > $a && $c > $b){
    echo "largest number is c=".$c; 
}
else {
    echo "all numbers are equal";
}