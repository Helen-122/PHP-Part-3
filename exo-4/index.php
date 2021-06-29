<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>

<body>
    <h2>Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. Si le premier<br>
     nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième"<br>
      sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième".<br>
       affichez "les deux nombres sont égaux" si les deux nombres sont identiques.</h2>

    <?php

    $a = rand(1,15);
    $b = rand(1,15);


//function rand(1,15) {
  // if ($i == 3) {
     // return true;
      
     // echo "true!";
  // }else{
    //  return false;
    //  echo "false!";
 //  }
//}

  $a = rand(1,15);
  echo "$a \n <br>";
    $b = rand(1,15);
    echo "$b \n<br>";

      function compare($a, $b) {
    if ($a < $b) {
        return "le premier nombre est plus petit que le deuxième";
    }
    else if ($a > $b) {
        return "le premier nombre est plus grand que le deuxième";
    }else{
        return "les deux nombres sont égaux";
    }

}
echo(compare($a, $b));


        
?>
</body>

</html>