<?php

function sum($a,$b,$c)
{
    $add = $a + $b + $c;
    echo "Sum of $a + $b + $c = ";
    return $add;
}

$total = sum(90,80,70);
echo $total;
echo "<br>";
$per = $total / 3;
echo "percentage = ".$per;

// echo "Sum of ". $a ." + ". $b." = ".$c;