<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Ejercicio multiplicar</title>
</head>
<body>
<?php
$const = 7;
for ($i=0; $i < $const; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        $multi=$i . $j;
        print "$j x $i = $multi"."/br";
    }

}

?>   
</body>
</html>
