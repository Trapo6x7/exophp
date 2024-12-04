<?php

//EXO1

echo "<br>";
echo "EXERCICE 1";
echo "<br>";

function handleTrue(){
    return true . " true <br>";
};

echo handleTrue();

//EXO2

echo "<br>";
echo "EXERCICE 2";
echo "<br>";

function handleString($a){
    return $a;
}

echo handleString("WECH <br>");

//EXO3

echo "<br>";
echo "EXERCICE 3";
echo "<br>";

function handleStringConc($a,$b){
    return "{$a} {$b} <br>";
}

echo handleStringConc("wech","pelo");

//EXO4

echo "<br>";
echo "EXERCICE 4";
echo "<br>";

function handleMath1($a,$b){
    if ($a>$b) {
       echo "Le premier nombre est plus grand<br>";
    }
    else if ($a<$b) {
        echo "Le premier nombre est plus petit<br>";
     } if ($a==$b){
        echo "Les nombres sont identiques<br>";
     };
    }

echo handleMath1(15,14);

//EXO5

echo "<br>";
echo "EXERCICE 5";
echo "<br>";

function handleStringConc2($a,$b){
    return "{$a} {$b} <br>";
}

echo handleStringConc2("13","pelo");

//EXO6

echo "<br>";
echo "EXERCICE 6";
echo "<br>";

function handleStringConc3($a,$b,$c){
    return "Bonjour {$a} {$b}, tu as {$c} ans. <br>";
}

echo handleStringConc3("wech","pelo", 32);

//EXO7

echo "<br>";
echo "EXERCICE 7";
echo "<br>";

function handleGender($a,$b){
   if ($a == "homme"){
        echo "vous etes un homme <br>";
   } else if($a != "homme"){
    echo "vous etes une femme <br>";
   }
   if ($b >= 18){
    echo "vous etes majour <br>";
} else if($b < 18){
echo "vous etes une mineur <br>";
}
}

echo handleGender("femme","32");

//EXO8

echo "<br>";
echo "EXERCICE 8";
echo "<br>";

$value1 = 12;
$value2 = 12;
$value3 = 12;

function handleSomme($value1,$value2,$value3){  
    $result = $value1 + $value2 + $value3 ;
    echo $result;
}

echo handleSomme($value1,$value2,$value3);
