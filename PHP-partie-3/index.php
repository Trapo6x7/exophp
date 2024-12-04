<?php

// exercice 1

echo "<br>";
echo "EXERCICE 1";
echo "<br>";

$varexo1 = 0;

while ($varexo1 <= 10){
    echo "{$varexo1}<br>";
    $varexo1 += 1;
};

// exercice 2

echo "<br>";
echo "EXERCICE 2";
echo "<br>";

$var1exo2 = 0;
$var2exo2 = 50;

while ($var1exo2 <= 20){
    $result = $var1exo2 * $var2exo2 . "<br>";
    echo $result ;
    $var1exo2 += 1 ;
}

// exercice 3

echo "<br>";
echo "EXERCICE 3";
echo "<br>";

$var1exo3 = 100;
$var2exo3 = 20;

while ($var1exo3 >= 10){
    $result = $var1exo3 * $var2exo3 . "<br>";
    echo $result ;
    $var1exo3 -= 1 ;
}

// exercice 4

echo "<br>";
echo "EXERCICE 4";
echo "<br>";

$var1exo4 = 1;

while ($var1exo4 <= 10){
    echo $var1exo4 . "<br>";
    $var1exo4 += $var1exo4/2;
}

// exercice 5

echo "<br>";
echo "EXERCICE 5";
echo "<br>";

for ($i = 1; $i <= 15; $i += 1){
    echo $i . ", on est presque <br>";
}

// exercice 6

echo "<br>";
echo "EXERCICE 6";
echo "<br>";

for ($i = 20; $i >= 0; $i -= 1){
    echo $i . ", c'est presque bon <br>";
}

// exercice 7

echo "<br>";
echo "EXERCICE 7";
echo "<br>";

for ($i = 1; $i <= 100; $i += 15){
    echo $i . ", on tient le bon bout <br>";
}

// exercice 8

echo "<br>";
echo "EXERCICE 8";
echo "<br>";

for ($i = 200; $i >= 0; $i -= 12){
    echo $i . ", enfin!!! <br>";
}
