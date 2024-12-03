<?php

$age = 32;
$gender = "homme";

if ($age >= 18 && $gender == "homme"){
    echo "<p> Vous etes un homme majeur </p>";
} else if ($age <= 18 && $gender == "homme") {
    echo "<p> Vous etes un homme mineur </p>";
} else if ($age >= 18 && $gender != "homme") {
    echo "<p> Vous etes une femme majeure </p>";
} else if ($age <= 18 && $gender != "homme") {
    echo "<p> Vous etes une femme mineure </p>";
};