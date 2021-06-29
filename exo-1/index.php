<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>

<body>
    <h2>Créez une fonction qui retourne un booléen.</h2>

    <?php



//$i = rand(0,1) == 1;

//if (rand(0, 1) == 1) {
   
  // return "true";
//}else{
  // return "false";
//}
//if (rand(1)) echo "true!";




//$i = 3;

//function rand(1,3) {
  // if ($i == 3) {
     // return true;
      
     // echo "true!";
  // }else{
    //  return false;
    //  echo "false!";
 //  }
//}

//$i = 1;

//function (bool)random_int(0, 1) {
//   if ($i == 1) {
 //     echo true;
 //  } else {
 //     echo false;
 //  }
//}
//if (check(1)) echo "Returned true!";
//var_dump($int);

//$a = false;
//$b = 0;

// Si $a est un booléen, is_bool retournera true

function lean($a){
  //return true;
  echo '(' .is_bool($a). ')';
}
  lean("32");
   lean("salut");
    lean(true);

//    correction

function returnBool (){
   return true;

}
echo returnBool()


// Si $b n'est pas un booléen, is_bool retournera false
//if (is_bool($b) === false) {
   // echo "Non, ce n'est pas un booléen.";
//}
?>






</body>

</html>