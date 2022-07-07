<?php 

/*
Pour récuperer les données envoyées d'un formulaire, on utilise une variable
delcarer par php: $_GET
Cette variable est dite SUPERGLOBALE. Les variables SUPERGLOBALES sont des
variables définies dans PHP, accesible partout.
Elles sont toujours nomées $_suivi du nom en majuscules.
Elles sont toutes de type array.
Elles ont toutes un rôle defini
    $_GET        : contient les données passées dans l'URL ou dans un formulaire en méthode GET
    $_POST       : contient les données passée dans un formulaire en méthode POST

    $_SESSION    : contient les info stockées dans la session utilisateur
    $_SERVER     : contient les info sur le serveur sur lequel se trouve le site php
    $_COOKIE     : contient les cookies
    $_FILES      : contient les info des fichiers uplodés dans un formulaire
*/



include "fonction.inc.php";
debug($_GET);
debug($_POST);
