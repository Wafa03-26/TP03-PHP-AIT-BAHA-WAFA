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
    <title>TP PHP - Exercice 2</title>
</head>
<body>
<h1>TP 3 PHP : mini-application « Suivi des notes des apprenants »</h2>
<h2>Partie 2: Structures de contrôle et boucles</h2>
<h2>Exercice 2.1 :if / elseif / else</h2>
<?php
foreach([17,14,12,10,9]as$n)
    echo "$n : ". mention($n);
?>

</body>
</html>