<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo 'Hola';
    echo '<h1>Este es un titulo</h1>';
    
    ?>
    <h1> <?php echo "Este es un titulo grande homie" ?></h1>

    <?php
    //Declaración de una variable
    $num = 3;
    $nombre = "Juan";
    $numDos = 3;
    $suma = $num + $numDos;
    echo "<h1>El resultado de la suma es: " . $suma . "</h1";
   ?>

   <input type="submit" value="Formularios"/>
        <a href="/formularios.php">
            <button>formularios</button>
        </a>
<br>

<?php

//Estructuras de control
//El if
$num = 3;
if( $num <= 3){
    echo "Son igual al 3" . "<br>";
}

//El switch
$num2 = 4;
switch($num2){
    case 1: echo "Soy el uno";
            break;
    case 4: echo "Soy el cuatro";
            break;
    default: echo "Fallaste";
            break;
}

//El while
$i = 1;
while($i <= 10){
    echo $i . "<br>";
    $i++;
}

// Do while
$q = 1;
do{
    echo $q;
    $q++;
}while($q <= 10);
echo "<br";

//for
for($w = 1; $w <=10; $w++){
    echo $w;
}

?>


  





</body>
</html>