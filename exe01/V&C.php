<?php
// 1. Variável $nome
$nome = "Wendell";
echo "<br>";

// 2. Variável $idade
$idade = 30;
echo "<br>";

// 3. Constante país
define("PAIS", "Brasil");
echo "<br>";

// 4. Constante π
define("PI", 3.14);
echo "<br>";
    
// 5. Imprimir $nome
echo "Nome: $nome\n";
echo "<br>";

// 6. Imprimir $idade
echo "Idade: $idade\n";
echo "<br>";

// 7. Três variáveis: inteiro, float, booleano
$numeroInteiro = 42;
$numeroFloat = 3.1415;
$verdadeiro = true;
echo "<br>";

// 8. Imprimir os valores
echo "Inteiro: $numeroInteiro, Float: $numeroFloat, Booleano: " . ($verdadeiro ? 'true' : 'false') . "\n";
echo "<br>";

// 9. Reatribuir cidade e estado
$cidade = "São Paulo";
$estado = "São Paulo";
$cidade = "Rio de Janeiro";
$estado = "Rio de Janeiro";
echo "<br>";

// 10. Imprimir cidade e estado
echo "Cidade: $cidade, Estado: $estado\n";
echo "<br>";
?>