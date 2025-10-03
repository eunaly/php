<?php 
// 1. Converter array em string com implode()
$Frutas = array("Maçã", "Banana", "Laranja", "Uva", "Melancia");
//print_r($Frutas); 
 $string_Frutas = implode(", ", $Frutas);
 echo $string_Frutas . "\n\n";

 echo "<br>";
  echo "<br>";

// 2. Converter string em array com explode()
 $string_frutas = "Maçã, Banana, Laranja, Uva, Melancia";
 $array_frutas = explode(", ", $string_frutas);
 print_r($array_frutas) . "\n\n";
 
 echo "<br>";
  echo "<br>";

 // 3. 
 $texto = "Olá, mundo!";
    $repeticoes = 5;
// Usando array_fill e implode para separar por espaço
    $array_texto = array_fill(0, $repeticoes, $texto);
$string_repetida = implode(" ", $array_texto);
echo $string_repetida . "\n\n";

 echo "<br>";
  echo "<br>";

// 4. Inverter uma string com strrev()
$meu_nome = "SeuNomeAqui";
$nome_invertido = strrev($meu_nome);
echo "<br>";
echo $nome_invertido . "\n\n";

echo "<br>";
 echo "<br>";

// 5. Extrair "mundo" da string "Olá, mundo!" usando substr
$frase = "Olá, mundo!";
$palavra_extraida = substr($frase, 5, 5); // começa na posição 5 e pega 5 caracteres
echo $palavra_extraida . "\n\n";
 echo "<br>";
  echo "<br>";


//  6
$html = "<h1>Título \n\n</h1><br><p>Parágrafo com <b>negrito</b></p>";
$texto_sem_tags = strip_tags($html);
echo $texto_sem_tags. "\n\n";
 echo "<br>";
  echo "<br>";
  
// 7 
$ex = " Exemplo de trim ";
$ex_trim = trim($ex);
echo $ex_trim . "\n\n";
echo "<br>";
 echo "<br>";

// 8 


?>