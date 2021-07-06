<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad PHP - U2</title>
</head>
<body>
    
<?php

$usuario['nombre'] = 'Luciano Adrian';
$usuario['apellido'] = 'Flores';
$usuario['edad'] = 23;
$usuario['hobbie'] = 'Pintar';
$usuario['editor_codigo_fav'] = 'vs code';
$usuario['so'] = 'Manjaro';

foreach ($usuario as  $key => $valor) {
    echo  "<strong>" . $key . ": </strong>" . $valor . "<br>";
}


?>

</body>
</html>