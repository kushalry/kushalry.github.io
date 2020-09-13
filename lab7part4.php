<?php

// PHP program to enter the marks of five subjects and calculate total, average, and percentage

$p1 = 100;
$c1 = 99;
$m1 = 98;
$e1 = 97;
$h1 = 96;

$p2 = 95;
$c2 = 95;
$m2 = 93;
$e2 = 92;
$h2 = 91;

$p3 = 90;
$c3 = 89;
$m3 = 88;
$e3 = 87;
$h3 = 86;

$p4 = 85;
$c4 = 84;
$m4 = 84;
$e4 = 82;
$h4 = 81;

$p5 = 80;
$c5 = 79;
$m5 = 78;
$e5 = 77;
$h5 = 76;

$p6 = 95;
$c6 = 85;
$m6 = 75;
$e6 = 65;
$h6 = 55;

$p7 = 96;
$c7 = 86;
$m7 = 76;
$e7 = 66;
$h7 = 56;

$p8 = 97;
$c8 = 86;
$m8 = 75;
$e8 = 64;
$h8 = 53;

$p9 = 99;
$c9 = 89;
$m9 = 79;
$e9 = 69;
$h9 = 59;

$p10 = 100;
$c10 = 90;
$m10 = 80;
$e10 = 70;
$h10 = 60;


$total1 = NULL;
$average1 = NULL;
$percentage1 = NULL;
$total2 = NULL;
$average2 = NULL;
$percentage2 = NULL;
$total3 = NULL;
$average3 = NULL;
$percentage3 = NULL;
$total4 = NULL;
$average4 = NULL;
$percentage4 = NULL;
$total5 = NULL;
$average5 = NULL;
$percentage5 = NULL;
$total6 = NULL;
$average6 = NULL;
$percentage6 = NULL;
$total7 = NULL;
$average7 = NULL;
$percentage7 = NULL;
$total8 = NULL;
$average8 = NULL;
$percentage8 = NULL;
$total9 = NULL;
$average9 = NULL;
$percentage9 = NULL;
$total10 = NULL;
$average10 = NULL;
$percentage10 = NULL;

// p, c, m, e, and h are the five subjects
// p = physics
// c = chemistry
// m = math
// e = english
// h = history

// Calculate total, average and percentage
$total1 = $p1 + $c1 + $m1 + $e1 + $h1;
$average1 = $total1 / 5.0;
$percentage1 = ($total1 / 500.0) * 100;
$total2 = $p2 + $c2 + $m2 + $e2 + $h2;
$average2 = $total2 / 5.0;
$percentage2 = ($total2 / 500.0) * 100;
$total3 = $p3 + $c3 + $m3 + $e3 + $h3;
$average3 = $total3 / 5.0;
$percentage3 = ($total3 / 500.0) * 100;
$total4 = $p4 + $c4 + $m4 + $e4 + $h4;
$average4 = $total4 / 5.0;
$percentage4 = ($total4 / 500.0) * 100;
$total5 = $p5 + $c5 + $m5 + $e5 + $h5;
$average5 = $total5 / 5.0;
$percentage5 = ($total5 / 500.0) * 100;
$total6 = $p6 + $c6 + $m6 + $e6 + $h6;
$average6 = $total6 / 5.0;
$percentage6 = ($total6 / 500.0) * 100;
$total7 = $p7 + $c7 + $m7 + $e7 + $h7;
$average7 = $total7 / 5.0;
$percentage7 = ($total7 / 500.0) * 100;
$total8 = $p8 + $c8 + $m8 + $e8 + $h8;
$average8 = $total8 / 5.0;
$percentage8 = ($total8 / 500.0) * 100;
$total9 = $p9 + $c9 + $m9 + $e9 + $h9;
$average9 = $total9 / 5.0;
$percentage9 = ($total9 / 500.0) * 100;
$total10 = $p10 + $c10 + $m10 + $e10 + $h10;
$average10 = $total10 / 5.0;
$percentage10 = ($total10 / 500.0) * 100;

// Output
echo "The Total marks   = " . $total1 . "/500<br>";
echo "The Average marks = " . $average1 . "<br>";
echo "The Percentage    = " . $percentage1 . "%<br>";
echo "The Total marks   = " . $total2 . "/500<br>";
echo "The Average marks = " . $average2 . "<br>";
echo "The Percentage    = " . $percentage2 . "%<br>";
echo "The Total marks   = " . $total2 . "/500<br>";
echo "The Average marks = " . $average2 . "<br>";
echo "The Percentage    = " . $percentage2 . "%<br>";
echo "The Total marks   = " . $total3 . "/500<br>";
echo "The Average marks = " . $average3 . "<br>";
echo "The Percentage    = " . $percentage3 . "%<br>";
echo "The Total marks   = " . $total4 . "/500<br>";
echo "The Average marks = " . $average4 . "<br>";
echo "The Percentage    = " . $percentage4 . "%<br>";
echo "The Total marks   = " . $total5 . "/500<br>";
echo "The Average marks = " . $average5 . "<br>";
echo "The Percentage    = " . $percentage5 . "%<br>";
echo "The Total marks   = " . $total6 . "/500<br>";
echo "The Average marks = " . $average6 . "<br>";
echo "The Percentage    = " . $percentage6 . "%<br>";
echo "The Total marks   = " . $total7 . "/500<br>";
echo "The Average marks = " . $average7 . "<br>";
echo "The Percentage    = " . $percentage7 . "%<br>";
echo "The Total marks   = " . $total8 . "/500<br>";
echo "The Average marks = " . $average8 . "<br>";
echo "The Percentage    = " . $percentage8 . "%<br>";
echo "The Total marks   = " . $total9 . "/500<br>";
echo "The Average marks = " . $average9 . "<br>";
echo "The Percentage    = " . $percentage9 . "%<br>";
echo "The Total marks   = " . $total10 . "/500<br>";
echo "The Average marks = " . $average10 . "<br>";
echo "The Percentage    = " . $percentage10 . "%<br>";

?>