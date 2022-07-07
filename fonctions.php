<?php


function salutation($prenomAsaluer)
{
    return "bonjour $prenomAsaluer";
}

// function ecrire($texte)
// {
//     echo $texte . "<br>";
// }

$prenom = "Pierre";
// echo "Bonjour $prenom";
echo salutation($prenom);

echo "<hr>";

$prenom = "Gertrude";
// ecrire(salutation($prenom . ", Comment allez-vous ?"));
// echo ", Comment allez-vous ?";

// echo "Bonjour $prenom, comment allez-vous ?";

echo "<hr>";

// $prenom = "Sandro";
// echo "Bonjour $prenom <br>";
// ecrire(salutation("Sandro<br>"));

echo "<hr>";

// salutation();

// ecrire("Bienvenue au cours de PHP");
// ecrire("Vive le Pole S");

// ecrire("Il est 9h " . salutation(" à tous"));


// debug($prenom);
