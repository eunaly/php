<?php
// 11. Verificar se é inteiro
$somenum1 = 20;
echo is_int($somenum1) ? "É inteiro\n" : "Não é inteiro\n";
echo "<br>";

// 12. Verificar se é float
$spc = " ";
echo is_float($spc) ? "É float\n" : "Não é float\n";
echo "<br>";

// 13. Verificar se é booleano
$startwo = true;
echo is_bool($startwo) ? "É booleano\n" : "Não é booleano\n";
echo "<br>";

// 14. Verificar se é string
$somesanga = "Olá, mundo!";
echo is_string($somesanga) ? "É string\n" : "Não é string\n";
echo "<br>";

// 15. Verificar se 0 é inteiro e imprimir "Não é inteiro"
$valor15 = 0;
echo is_int($valor15) ? "Não é inteiro\n" : "É inteiro\n"; // inverso proposital
echo "<br>";

// 16. Verificar se false é booleano e imprimir "Não é booleano"
$valor16 = false;
echo is_bool($valor16) ? "Não é booleano\n" : "É booleano\n"; // inverso proposital
echo "<br>";

// 17. Verificar se 0.0 é float e imprimir "Não é float"
$valor17 = 0.0;
echo is_float($valor17) ? "Não é float\n" : "É float\n"; // inverso proposital
echo "<br>";

// 18. Verificar se 0 é string e imprimir "Não é string"
$valor18 = 0;
echo is_string($valor18) ? "Texto válido\n" : "Não é string\n";
echo "<br>";

// 19. Verificar se 10 é inteiro e imprimir "É inteiro"
$valor19 = 10;
echo is_int($valor19) ? "É inteiro\n" : "Não é inteiro\n";
echo "<br>";

// 20. Verificar se 10 é string e imprimir "Texto válido"
$valor20 = 10;
echo is_string($valor20) ? "Texto válido\n" : "Não é texto\n";
echo "<br>";
?>