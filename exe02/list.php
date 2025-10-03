<?php
// 21. Atribuir nome, sobrenome e idade
$pessoa = ['Anna', 'Guedes', 17];
list($nome, $sobrenome, $idade) = $pessoa;
echo "$nome $sobrenome tem $idade anos.\n";
echo "<br>";

// 22. Extrair primeiro e terceiro elemento
$dados = ['1', '2', '3'];
list($primeiro, , $terceiro) = $dados;
echo "Primeiro: $primeiro, Terceiro: $terceiro\n";
echo "<br>";

// 23. Extrair elementos de dois arrays internos
$duplo = [['João', 'Silva'], ['Maria', 'Oliveira']];
list(list($nome1, $sobrenome1), list($nome2, $sobrenome2)) = $duplo;
echo "$nome1 $sobrenome1 e $nome2 $sobrenome2\n";
echo "<br>";

// 24. Iterar com list() sobre array de arrays
$pessoas = [['Ana', 25], ['Bruno', 30], ['Carla', 22]];
foreach ($pessoas as list($nome, $idade)) {
    echo "$nome tem $idade anos\n";
}
echo "<br>";

// 25. Função que retorna array e extrai com list()
function getDados() {
    return ['Vitória', 'ES', 'Brasil'];
}
list($cidade, $estado, $pais) = getDados();
echo "$cidade, $estado - $pais\n";
echo "<br>";

// 26. Atribuir valores sem usar list()
$valores = [100, 200, 300];
$valor1 = $valores[0];
$valor2 = $valores[1];
$valor3 = $valores[2];
echo "$valor1, $valor2, $valor3\n";
echo "<br>";

// 27. Pegar segundo e terceiro elementos
$elementos = ['x', 'y', 'z', 'w'];
list(, $segundo, $terceiro) = $elementos;
echo "$segundo e $terceiro\n";
echo "<br>";

// 28. Processar CSV com explode() e list()
$csv = [
    "João,Silva,30",
    "Maria,Oliveira,25",
    "Carlos,Santos,40"
];
foreach ($csv as $linha) {
    list($nome, $sobrenome, $idade) = explode(",", $linha);
    echo "$nome $sobrenome tem $idade anos\n";
}
// $Arq = 'Dados.csv';
// $ret = fopen($Arq, 'r');
// if ($ret === false) {
//     echo "Erro ao abrir o arquivo";
// } 
// while($dado = fgets($ret, 40, ',' !== false)) {
//     $print($dado);
// }
// fclose($ret);
   
echo "<br>";

// 29. Função que retorna coordenadas
function coordenadas() {
    return [15.5, 42.3];
}
list($x, $y) = coordenadas();
echo "X: $x, Y: $y\n";
echo "<br>";

// 30. Função que retorna nomes compostos
function usuarios() {
    return [['Ana', 'Silva'], ['Bruno', 'Souza'], ['Carla', 'Mendes']];
}
foreach (usuarios() as list($nome, $sobrenome)) {
    echo "$nome $sobrenome\n";
}
echo "<br>";
?>