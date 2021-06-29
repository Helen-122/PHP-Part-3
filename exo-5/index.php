<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>

<body>
    <h2>Créez une fonction qui retourne une chaîne de caractère et un nombre aléatoire.</h2>
<?php


//$a = "on est le";
//$b = rand(1,5);


//function randString($a, $b){

//    $concatRandString = $string  . ' ' . $int ;
//    return $concatString;
//}
//echo randString();

//correction

function display(){
$r=rand(1,10);
return "Cette fonction retourne une chaine de caractères et le nombre alétoire: ".$r;
}
echo display();


?>
</body>

</html>