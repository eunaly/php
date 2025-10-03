<?php
// 1) Criar array vazio e imprimir com print_r
$arrayVazio = [];
print_r($arrayVazio);
echo "<br>";

// 2) Criar array com valores de 1 a 20 e imprimir
$arrayNumeros = range(1, 20);
print_r($arrayNumeros);
echo "<br>";

// 3) Imprimir os números cujo resto da divisão por 2 seja diferente de zero (ímpares)
foreach ($arrayNumeros as $num) {
    if ($num % 2 != 0) {
        echo "$num é ímpar\n";
    }
}
echo "<br>";

// 4) Separar números ímpares e pares em dois arrays e imprimir
$pares = [];
$impares = [];
echo "<br>";

foreach ($arrayNumeros as $num) {
    if ($num % 2 == 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

echo "Números pares:\n";
print_r($pares);

echo "Números ímpares:\n";
print_r($impares);
echo "<br>";
?>