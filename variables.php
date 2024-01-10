<?php
// $x = 1;
// $y = &$x;

// $x = 3;
// echo $y;

$ismale = true;

echo $ismale;
if($ismale){
    // echo "";
}

// $datatypes = [1, 5, 10, 0, 'A', 'Love', true];
// print_r ($datatypes);


// normal 
$x = (2.6 + 54 * (2)) . '<br/>';
echo $x;
// using floor
$x = floor(2.6 + 54 * (2)) . '<br/>';
echo $x;
// using ceil
$x = ceil( 2.6 + 54 * (2)) . '<br/>';
echo $x;


$x = 2.76;
$y = 35;

var_dump($x, $y) . '<br/>';

if($x == $y){
    echo "yes";
}else{
    echo "no";
}

$finit = PHP_FLOAT_MAX * 3;

// use is in finity inbuild function to check 
var_dump(is_finite($finit)) . '<br/>';
var_dump($finit) . '<br/> <br/>';

// Strings
$fname = "Al'ameen";
$sname = "Rabiu";

echo "$sname Al'ameen"  . '<br/>';
$name =  ($sname . '  ' . $fname);
echo $name . '<br/>';
echo $name[7];
?>