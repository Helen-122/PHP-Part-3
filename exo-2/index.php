<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>

<body>
    <h2>Créez une fonction qui retourne une chaîne de caractère</h2>

    <?php

function message() {
  echo "Hello world!";
}

message();

//correction

function returnText($string = "coucou les descodeuses"){
return $string;
}
echo returnText();


?>
</body>

</html>