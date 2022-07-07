<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid blue;
        }

        th, td {
            padding: 5px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
     <!-- 1. Le PHP ne sera interprété que s'il est dans un fichier avec 
          l'extension .php  
        
        2. le PHP ne sera interprété que s'il est dans un fichier qui se trouve
            sur un serveur (Apache, par exemple)
            NB : un navigateur ne peut pas interprété le code PHP
    -->
    <h1>Cours de PHP</h1>
    <?php
        echo "<strong>bienvenue</strong> au Pole S<br>";
        // commentaires sur 1 ligne
        /* commentaires sur plusieurs lignes 

        La fonction echo va afficher la donnée qui suit. ex:
            echo 5;
        affichera 5
        */
        echo 5;

        // LES VARIABLES
        /* 1. En PHP, les noms de variables SONT TOUJOURS précédés par un caractère $ 
           2. La déclaration et l'affectation se font en même temps, il n'a pas de possiblité de 
                le faire en 2 étapes (comme en JavaScript par exemple)
        */ 
        $nomDeLaVariable = "chaine de caractères";
        $i = 0;

        echo "<br>" . $nomDeLaVariable . "<br>";
        echo $i / 5;

        // Les TYPES DE VARIABLES
        /*
            - string : délimités par " ou ' 
                On peut utiliser l'opérateur de concaténation . (caractère point)

            - integer (int) : nombre entier
                Pas de caractère pour délimiter une valeur entière
            
            - float, double : nombre réel

                Avec les types numériques, on peut utiliser les opérateurs arithmétiques (+-/*)

            - boolean (bool) : valeur booléenne
                valeurs possibles : true, false
                On peut utiliser les opérateurs logiques : AND, OR, NOT
                    and: &&
                    or:  ||
                    not: !

            Opérateurs de comparaison : > < >= <= == === != !==
                On utlise ces opérateurs avec des numériques ou des strings.
                Le résultat de l'utilisation de ces opérateurs est toujours un booléen
        */
        $oui = true;
        echo "<br>Ma variable i vaut " . $i . "<br>";
    ?>

    <p>Vous allez apprendre à développer des sites dynamiques.</p>

    <hr>
    <h2>Les opérateurs de comparaison</h2>
    <?php 
        $a = 7;
        $b = 7;

        // echo $a < $b;
        /* EXO : si $a est inférieur à $b afficher "a est inférieur à b" 
            sinon afficher "a est supérieur à b" */

        if( $a < $b ){
            echo "a est inférieur à b";
        } elseif($a > $b) {
            echo "a est supérieur à b";
        } else {
            echo "a est égal à b";
        }
        echo "<p>suite du code PHP</p>";

        echo "<hr>";
        $a = 5;
        $b = "5";
        echo "le type de la variable a est : " . gettype($a) . "<br>";
        echo "le type de la variable b est : " . gettype($b) . "<br>";

        if( $a == $b ) {
            echo "<p>les valeurs des variables a et b sont égales</p>";
        } else {
            echo "<p>les variables a et b sont différentes</p>";
        }

        if( (string)$a === $b ) {
            echo "<p>les variables a et b sont identiques (ou strictement égales)</p>";
        } else {
            echo "<p>les variables a et b sont différentes</p>";
        }

        // $a = 0;
        if( (object)$a ) {
            echo "vrai";
        } else {
            echo "faux";
        }
    ?>

    <p>Lorsque PHP a besoin de transformer une valeur en booléen (par exemple, la condition
        d'un <code>if</code>), selon le type de données, certaines valeurs seront considérées comme
        <i>false</i> :
        <ul>
            <li>String : chaine de caractères vide <code>""</code></li>
            <li>Numérique : <code>0</code></li>
            <li>Booléen : <code>false</code></li>
            <li>Tableau : array vide <code>[]</code></li>
            <li>Objet : <mark>⚠ un objet n'est jamais considéré comme valant false</mark></li>
        </ul>
        Toutes les autres valeurs seront considérées comme <i>true</i>.
    </p>

    <?php
        $c = $a + $b;
        echo "Le type de la variable c est " . gettype($c) . " et sa valeur est \$c=$c";

        $d = $a . $b;
        echo "<br>Le type de la variable d est " . gettype($d) . ' et sa valeur est de $d' ;
        
    ?>

    <hr>

    <h2>Les constantes</h2>
    <p>Le mot-clé pour définir une constante en PHP est <code>define</code>. C'est une fonction.
        <?php
            define("PI", 3.1415926);
            echo "<br>La surface d'un cercle dont le rayon vaut 5cm est de " . (PI * 5 * 5). "cm<sup>2</sup><br>" ;
        //    $PI = 5;
        ?>
    </p>

    <hr>
    <h2>Structures itératives : Les boucles</h2>
    <h3>Boucle FOR</h3>
    <code>for(initialisation ; condition ; incrémentation)</code>
    <?php
        for($i = 1; $i <= 10; $i++){
            echo ($i - 1) . "<br>";
        }

        /*  Afficher la liste des 100 premiers nombres à partir de 0 et leur carré dans une table HTML
            _____________
            |  0  |  0  |
            |  1  |  1  |
            |  2  |  4  |
            |  3  |  9  |
            | ... | ... |
        */

        echo "<table>";
        for($cpt = 0; $cpt < 100 ; $cpt+=2){
            $carre = $cpt * $cpt;
            echo "<tr>";
            echo "<td>$cpt</td> <td>$carre</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<hr>";
        echo "<h3>Boucle WHILE</h3>";
    ?>
    <p>
        <strong>Syntaxe : </strong> <code>while( condition ){...}</code>
    </p>
    <?php
        $cpt = 0;
        echo "<table>";
        while( $cpt++ < 100){
            $carre = $cpt * $cpt;
            echo "<tr>";
            echo "<td>$cpt</td> <td>$carre</td>";
            echo "</tr>";
        }
        echo "</table>";

        // $i = 0;
        // while( $i++ < 10 ){
        //     echo "le nombre est " . ($i += 1) . "<br>";
        // }

        /* la fonction var_dump permet d'afficher les info d'une ou plusieurs variables
            var_dump ou print_r ne s'utilise qu'en debug

            la fonction exit ou die  arrete l'execution du code php
            */
        // var_dump($i);
        //exit;

        /* La difference  entre la boucle WHILE et la boucle DO WHILE est que, quoiqu'il arrive, la boucle DO WHILE sera exécutée
        au moins 1 fois.
        Pour la boucle WHILE la condition est évaluée au début,donc il est possible que cette boucle ne soit jamais exécutée. */

        // $somme=0;
        // do {
        //     echo "$i, "; 
        // } while ($somme < 100);

    ?>
    <ul>
        <?php for($i=0;$i <= 5*9 ; $i+=5): ?>
        <li><?php echo $i; ?></li>
        <?php  endfor; ?>
    </ul>

    <?php
    
            $age=55;
            if( $age < 18 ) {
                echo "vous etes mineur";
            } elseif ($age > 59) { 
                echo "vous etes majeur";
            } else {
                "vous etes senior";
            }
           
    
    ?>
    <?php 
    
    for($mois=1;$mois<=12;$mois++) {
        echo "<h3>Mois n'$mois</h3>";
        for($jours=1;$jours<=31;$jours++) {
            echo "<p>";
            if ($mois == 2 && $jours <=28 || $mois !== 2 ) {
                echo "$jours/$mois/2022";
                echo "</p>";
            }
          
          
            
           
    } // fin du if
}


    ?>


</body>
</html>