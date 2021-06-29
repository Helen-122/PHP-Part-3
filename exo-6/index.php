<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>

<body>
    <h2>Créez une fonction qui retourne l'addition de trois nombres.</h2>
<?php


function calculate($a = 1, $b = 2, $c = 3) {
    $result = $a + $b + $c;
    return "le resultat de l'adittion est $result";
}
echo calculate();
 
?>
</body>

</html>