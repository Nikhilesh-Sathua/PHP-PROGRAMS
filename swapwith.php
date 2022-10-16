<?php
// How to swap the two integers or real numbers
// without using the third variable in the PHP language

$p = 8;
$q = 9;

$p = $p - $q;
$q = $p + $q;
$p = $q - $p;

echo "After swapping, p = " . $q . "\n";
echo "After swapping, q = " . $p;

?>