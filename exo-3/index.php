<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>

<body>
    <h2>Créez deux variables contenant chacune une string.<br> 
    Créez une fonction qui retourne le contenu de ces deux variable.</h2>

    <?php

$a = "salut ";
$b = "ca va? ";
$concatenation = sprintf($a . $b);
echo($concatenation);


$c = "ca va ";
$d = "et toi?";

function concatenate(){
           $concatenation2 = ("ca va " . "et toi? ");
            return $concatenation2;     
}

$use_function = concatenate();
echo $use_function; 

//correction:

$text1 = "hello";
$text2 = "desCodeuses ";
$text3 = "yo";
$text4 = "ya";
function concatString($string, $string2){
    $concatText = $string . ' ' .$string2;
    return $concatText;
}
echo concatString($text1, $text2);
echo concatString($text3, $text4);
      
?>
</body>

</html>