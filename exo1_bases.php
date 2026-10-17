<?php
/* Auteur : WAFA AIT BAHA 
    Grp:02
    TP:03 PHP : mini-application
*/
require "config.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP - Exercice 1</title>
</head>
<body>
<h1>TP 3 PHP : mini-application « Suivi des notes des apprenants »</h2>
<h2>Partie 1 : Variables, constantes, types et chaînes</h2>
<h2>Exercice 1.1 : Noms de variables</h2>

<?php
echo 'Hello PHP';

// Variables
$x = 0;
$_x = 2;
$Prix_HT = 200;
$état = "valid";

$a = 5;
$A = 15;

echo "<br>"."Valeur de a : " . $a . "<br>";
echo "Valeur de A : " . $A . "<br>";
?>

<h2>Exercice 1.2 : Constantes</h2>

<?php
echo ETABLISSEMENT . "<br>";
echo NOTE_MIN . "<br>";
echo NOTE_MAX . "<br>";
echo SEUIL . "<br>";

var_dump(defined("SEUIL"));
var_dump(defined("INCONNUE"));
// SEUIL is already defined so the output will show as  bool(True)
//par contre INCONNUE is not defined

/*afficer une constante non définie cause une erreur */
/*Diff entre  const et define 
- const permet de declarer  une constante directement 
-define permet de defenir une constante a l'aide d'une fonction
*/
?>


<h2>Exercice 1.3 : Calcul</h2>

<?php
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo "Le prix TTC du produit est de " . $prix_ttc . " €.";
?>

<h2>Exercice 1.4 : Types et conversions</h2>
<?php

// 1.Conversion en chaîne

$test = 42;
$test = (string)$test;

var_dump($test);
?>
<br>
<?php
// Question 2 : Conversion en booléen
var_dump((bool) 0);
?>
<br>
<?php
var_dump((bool) 0.0);
?>
<br>
<?php   
var_dump((bool) "0");
?>
<br>
<?php   
var_dump((bool) "");
?>
<br>
<?php

var_dump((bool) "abc");
?>
<br>
<?php
var_dump((bool) []);
?>
<br>
<?php
var_dump((bool) null);

?>
<br>
<?php
// 3 : Conversion  vers int et float
var_dump((int) 3.9);
?>
<br>
<?php
var_dump((int) "12abc \n");
?>
<br>
<?php
var_dump((float) "1.5e3");
?>
<br>
<?php
var_dump((int) true);
?>
<br>
<?php
?>
<br>
<?php
// Question 4 : Conversion des bases
$nombre = 255;

echo "Décimale : " . $nombre . "<br>";
echo "Hexadécimale : " . dechex($nombre) . "<br>";
echo "Octale : " . decoct($nombre) . "<br>";
echo "Binaire : " . decbin($nombre) . "<br>";
?>

<h2>Exercice 1.5 :Chaînes de caractères</h2>
<?php
//1.Guillemets et apostrophes
echo 'Ahmed a dit : "J\'ai réussi"' . "<br>";
// 2 : Antislashs
echo 'Voulez-vous supprimer C:\*.*?' . "<br>";

// 3 : Afficher \n tel quel
echo 'Ceci n\'affichera pas \n de nouvelle ligne' . "<br>";

// 4 : Variables non interprétées
$traitees = "égales à";
$ici = 2;

echo 'Les variables ne seront pas $traitees $ici' . "<br>";

// 5 : Variables interprétées
echo "Les variables seront $traitees $ici" . "<br>";


?>

</body>
</html>