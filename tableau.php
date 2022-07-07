<?php

/* Quand un fichier PHP ne contient que du php, on ne ferme pas la balise php.
ce fichier ne doit pas avoir de ligne vide avant la balise php */

// Déclaration d'une variable type array

$tableau = []; // $tableau est un array vide (il n'y a aucune valeur dans cet array)
$tableau2 = array(); // ancien façon de declarer un array vide

// Ajoute une valeur à un array
$tableau[] = 5; //j'ajoute la valeur 5 à la variable $tableau qui est de type array
$tableau[] = "une chaine de caractère";
$tableau[] = true;

// Accéder à une valeur du tableau
echo $tableau[1]; // affiche la deuxieme valeur de $tableau (⚠ les indices d'un array commencent à 0)

echo $tableau[0] * 2; // on peut utiliser les valeurs de l'array comme n'importe quelle variable

// modifier une valeur de l'array

$tableau[1] = "nouvelle chaine de caractère";


// On peut utiliser un array comme un string (donc PHP ne peut pas convertir un type array en type string)

// echo $tableau;

echo "<pre>";
var_dump($tableau);
echo "<hr>";
print_r($tableau);
echo "</pre>";

$tableau[8] = 789;
$tableau[] = "texte";


echo "<pre>";
var_dump($tableau);
echo "</pre>";

// Autre façon de declarer un tableau, avec des valeurs
$tableau2 = [8,79,123,-5];
echo "<pre>";
var_dump($tableau2);
echo "</pre>";

// La taille d'un tableau : fonction count()
echo "mon tableau a " . count ($tableau) . " valeurs<br> ";

// EXO afficher toutes les valeurs de $tableau2 dans une balise ol

echo "<ol>";
for($i =0;$i < count($tableau2);$i++){
    echo "<li>";
    echo $tableau2[$i];
    echo "</li>";
}


/* Boucle foreach : cette boucle permet de parcourir toutes les valeurs d'un array 
*/

foreach($tableau as $cle => $element) {
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

echo "<h2>TABLEAU ASSOCIATIF </h2>";
$personnage = ["nom" => "mentor","prenom" => "Gerard"];

echo"<pre>";
var_dump($personnage);
echo"</pre>";

echo "Le personnage s'appelle " . $personnage["prenom"];


// Ajoutez l'indice "age" et la valeur 33 à la variable $personnage

$personnage  ["age"] = 33;
echo "<pre>";
var_dump($personnage);
echo "</pre>";
// EXO : déclarer une variable nommée personnage2 avec les indices nom,prenom,age
// et les valeurs seront vos info perso.




$personnage2 = ["nom" => "Robert","prenom" => "Lucas", "age" => "23"];

echo "Je m'appelle " . $personnage2 ["prenom"], "et j'ai " . $personnage2["age"] ."ans" ;

// $double = [];

// $i=1;
// $x=2;
// $result='';
// while($i<=200)
// {
// $result.= $x.'x'.$i.'='.$x*$i.'<br />';
// $i++;
// }

// $double = [$result];


// echo "<pre>";
// var_dump($double);
// echo "</pre>";


$double = [];

for($i = 1; $i <=201; $i++){
    $a = $i*2;
    $double[] = $a;
}

//  echo "<pre>";
//  var_dump($double);
//  echo "</pre>";

for ($i = 3; $i <= 7; $i++) {

    echo $double[$i] . "<br>";

}


/* array_splice(tableau,debut,longueur)
    Fonction qui retourne un array qui sera une partie de l'array 'tableau'.
    le premier indice recuperé sera 'debut', et l'array retourne aura
   'longueur' valeurs.



*/

$partie = array_splice($double,3,5);
echo "<pre>"; var_dump($partie); echo "</pre>";

$jours = ["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];


echo "<table border='1'>";

for($z=0;$z < 5; $z++) {
    echo  "<tr><td>" . $jours[$z] . "</td></tr>";
}

echo "</table>";



echo $jours[4];


echo "<br>";

echo "Il y'a :" .count($jours) . " jours dans une semaine";

echo "<br>";

// var_dump(array_reverse($jours));

for($q=6;$q>=0;$q--) {
    echo $jours[$q];
  
     
    }

