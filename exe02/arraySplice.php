<?php
// 10. Extrair as 3 primeiras palavras
$palavras = ['sol', 'lua', 'estrela', 'nuvem', 'chuva'];
$extraidas = array_splice($palavras, 0, 3);
print_r($extraidas);
echo "<br>";

// 11. Remover os 2 primeiros elementos
$numeros = [10, 20, 30, 40, 50];
array_splice($numeros, 0, 2);
print_r($numeros);
echo "<br>";

// 12. Substituir 'c' por 'k'
$letras = ['a', 'b', 'c', 'd', 'e'];
array_splice($letras, 2, 1, ['k']);
print_r($letras);
echo "<br>";

// 13. Inserir 3 novas letras em posições arbitrárias
$alfabeto = ['a', 'b', 'c', 'd', 'e', 'f'];
array_splice($alfabeto, 3, 0, ['x', 'y', 'z']);
print_r($alfabeto);
echo "<br>";

// 14. Remover 3 elementos e substituir por outros 3
$numeros2 = [1, 2, 3, 4, 5];
array_splice($numeros2, 1, 3, [9, 8, 7]);
print_r($numeros2);
echo "<br>";

// 15. Remover a segunda fruta e substituir por duas
$frutas = ['maçã', 'banana', 'laranja', 'melancia'];
array_splice($frutas, 1, 1, ['kiwi', 'abacaxi']);
print_r($frutas);
echo "<br>";

// 16. Inserir um novo elemento na terceira posição
$numeros3 = [100, 200, 300, 400, 500];
array_splice($numeros3, 2, 0, [250]);
print_r($numeros3);
echo "<br>";

// 17. Remover um par chave-valor de array associativo
$assoc = ['nome' => 'Ana', 'idade' => 30, 'cidade' => 'Vitória'];
$temp = array_values($assoc); // converter para índice numérico
array_splice($temp, 1, 1); // remove 'idade'
print_r($temp);
echo "<br>";

// 18. Esvaziar completamente um array
$nomes = ['Carlos', 'João', 'Maria', 'Fernanda', 'Lucas'];
array_splice($nomes, 0);
print_r($nomes); // vazio
echo "<br>";

// 19. Substituir os últimos 2 animais por outros 2
$animais = ['gato', 'cachorro', 'pássaro', 'peixe', 'coelho'];
array_splice($animais, -2, 2, ['tigre', 'leão']);
print_r($animais);
echo "<br>";
?>