<?php

//EXO1

$months = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];

var_dump($months);

//EXO2

echo $months[2] . "<br> <br>";

//EXO3

echo $months[5] . "<br> <br>";

//EXO4

$months[7] = "août";

var_dump($months);

//EXO5

$hautdefrance = [
    59 => "Nord",
    62 => "Pas-de-Calais",
    80 => "Somme",
    60 => "Oise",
    2  => "Aisne"
];

var_dump($hautdefrance);

//EXO6

echo $hautdefrance[59];

//EXO7

$hautdefrance[51] = "Marne";

var_dump($hautdefrance);

//EXO8

for ($i = 0; $i < count($months); $i += 1) {
    echo $months[$i] . "<br>";
}
echo "<br>";

//EXO9

print_r(array_values($hautdefrance));

echo "<br><br>";
//EX010

foreach ($hautdefrance as $codedepartement => $nomdepartement)

    echo ("Le département {$nomdepartement} a le numéro {$codedepartement} <br>");
