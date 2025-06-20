<?php   


echo "<p style='color: darkblue; font-weight: bold;'> 1.- Mostrar un mensaje de saludo usando una variable.";
$saludo = "¡Hola, bienvenido a PHP!";
echo "<h4>$saludo</h4>";

echo "<p style='color: darkblue; font-weight: bold;'>  2.- Sumar dos números almacenados en variables y mostrar el resultado.";
$num1 = 5;
$num2 = 10;
$suma = $num1 + $num2;
echo "<p>La suma de $num1 y $num2 es: $suma</p>";

echo "<p style='color: darkblue; font-weight: bold;'>  3.- Calcular el área de un rectángulo con base y altura dadas.";
$base = 10;
$altura = 16;
$area = ($base * $altura)/2;
echo "<p>El área del triangulo es la siguiente: $area</p>";

echo "<p style='color: darkblue; font-weight: bold;'> 4.- Verificar si un número es mayor que otro. ";
$numero1 = 15;
$numero2 = 20;
if ($numero1 > $numero2) {
    echo "<p>El numero $numero1 es mayor que el $numero2</p>";
}else{
    echo "<p>El número $numero1 es menor que el $numero2</p>";
}

echo "<p style='color: darkblue; font-weight: bold;'>  5.- Determinar si un número es par o impar.";
$esparestenumero = 4;
if ($esparestenumero % 2 == 0){
    echo "<p>El número $esparestenumero es par</p>";
} else {
    echo "<p>El número $esparestenumero es impar</p>";      
}

echo "<p style='color: darkblue; font-weight: bold;'>  6.- Evaluar si una persona es mayor de edad con base en su edad.";
$edad = 18;
if ($edad >= 18) {
    echo "<p>La persona con la edad de $edad es mayor de edad.</p>";
} else {
    echo "<p>La persona con la edad de $edad es menor de edad.</p>";
}

echo "<p style='color: darkblue; font-weight: bold;'>  7.- Mostrar el mayor de tres números usando condicionales.";
$numeroA = 25;
$numeroB = 30;
$numeroC = 20;
echo "<p>De los numeros son $numeroA , $numeroB y $numeroC, ";
if ($numeroA > $numeroB && $nuemroA > $numeroC) {
    echo "el número mayor es: $nuemroA</p>";
} elseif ($numeroB > $numeroA && $numeroB > $numeroC) {
    echo "el número mayor es: $numeroB</p>";
} else {
    echo "el número mayor es: $numeroC</p>";
}


echo "<p style='color: darkblue; font-weight: bold;'>  8.- Mostrar los números del 1 al 10 usando un bucle while. ";
$contador = 1;
echo "<p>Números del 1 al 10: ";
while ($contador <= 10) {
    if ($contador == 10)
        {
        echo ("$contador.");
        }
        else
        {
        echo "$contador, ";
        }
    $contador++;
}
echo "</p>";

echo "<p style='color: darkblue; font-weight: bold;'>  9.- Sumar los números del 1 al 100 usando un bucle for.";
$sumaTotal = 0;
for ($i = 1; $i <= 100; $i++) {
    $sumaTotal += $i;
}
echo "<p>La suma de los números del 1 al 100 es: $sumaTotal</p>";

echo "<p style='color: darkblue; font-weight: bold;'>  10.- Mostrar los números pares del 1 al 20 usando un bucle for.";
$numerosPares = [];
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        $numerosPares[] = $i;
    }
} echo "<p>Números pares del 1 al 20: " . implode(", ", $numerosPares) . "</p>"; 

echo "<p style='color: darkblue; font-weight: bold;'>  11.- Contar cuántos números pares hay entre 1 y 50.";
$iteracion = 0;
$numerospares = 0;
do {
    if ($iteracion %2 ==0)
    {
        $numerospares++;
    }
    $iteracion++;
}while ($iteracion < 50);
echo "<p>Entre el 1 y el 50 hay: $numerospares números pares</p>";

echo "<p style='color: darkblue; font-weight: bold;'>  12.- Generar la tabla de multiplicar del 5 usando un bucle.";
$tablaMultiplicar = 5;
echo "<p>Tabla de multiplicar del $tablaMultiplicar:</p>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $tablaMultiplicar * $i;
    echo "$tablaMultiplicar x $i = $resultado <br>";
}


echo "<p style='color: darkblue; font-weight: bold;'>  13.- Calcular el factorial de un número dado.";
$numeroFactorial = 5;
$factorial = 1;
for ($i = 1; $i <= $numeroFactorial; $i++) {
    $factorial *= $i;
}
echo "<p>El factorial de $numeroFactorial es: $factorial</p>";

echo "<p style='color: darkblue; font-weight: bold;'>  14.- Calcular la suma de los números del 1 al 100 usando un bucle while.";
$iteracion = 0;
$numerosimpares = 0;
do {
    if ($iteracion %2 !=0)
    {
        $numerosimpares++;
    }
    $iteracion++;
}while ($iteracion < 50);
echo "<p>Entre el 1 y el 50 hay: $numerosimpares números impares</p>";


echo "<p style='color: darkblue; font-weight: bold;'>  15.- Calcular la media de tres notas y determinar si está aprobado.";

$nota1 = 7;
$nota2 = 8;
$nota3 = 9;
$media = ($nota1 + $nota2 + $nota3) / 3;
if ($media >= 5) {
    echo "<p>La media de las notas es $media. ¡Estás aprobado!</p>";
} else {
    echo "<p>La media de las notas es $media. No has aprobado.</p>";
}


echo "<p style='color: darkblue; font-weight: bold;'>  16.- Imprimir los números del 10 al 1 en orden descendente.";
$contador = 10;
echo "<p>Números del 10 al 1: ";
while ($contador >= 1) {
    if ($contador == 1) {
        echo ("$contador.");
    } else {
        echo "$contador, ";
    }
    $contador--;
}
echo "</p>";

echo "<p style='color: darkblue; font-weight: bold;'>  17.- Calcular la suma de los números del 1 al 30 usando un bucle for.";
$topemultiplos = 30;
$contadormultiplosde3 = 0;
for ($i=1; $i <= $topemultiplos; $i++){
    if( $i % 3 ==0){
        $contadormultiplosde3++;
    }
}
echo "<p>Entre el 1 y el $topemultiplos hay $contadormultiplosde3 multiplos de 3</p>";



echo "<p style='color: darkblue; font-weight: bold;'>  18.- Calcular el área de un triángulo con base y altura dadas.";
$baseTriangulo = 8;
$alturaTriangulo = 5;
$areaTriangulo = ($baseTriangulo * $alturaTriangulo) / 2;
echo "<p>El área del triángulo con base $baseTriangulo y altura $alturaTriangulo es: $areaTriangulo</p>";

echo "<p style='color: darkblue; font-weight: bold;'>  19.- Mostrar los primeros 10 números de la serie Fibonacci.";
$fibonacci = [0, 1];
for ($i = 2; $i < 10; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}
echo "<p>Los primeros 10 números de la serie Fibonacci son: " . implode(", ", $fibonacci) . "</p>";




?>

<!DOCTYPE html>
<html>
<head>
    <title>Verificar número primo</title>
</head>
<body>

<p style='color: darkblue; font-weight: bold;'>  20.- Verificar si un número es primo.</p>
<form method="post">
    <label for="numero">Introduce un número:</label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit" value="Verificar">
</form>

<?php
function esPrimo($num) {
    if ($num <= 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;

    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    if (esPrimo($numero)) {
        echo "<p>El número $numero es primo.</p>";
    } else {
        echo "<p>El número $numero no es primo.</p>";
    }
}
?>

</body>
</html>
