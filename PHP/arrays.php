<?php
//Exemplo 1
$lista_frutas = array("Banana", "Maçã", "Morango", "Uva");

echo $lista_frutas[1] ; // Isso mostraria "maçã'
 
echo "<br/>";

//Exemplo 2
//criando a array Lista de frutas
$lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];

echo "$lista_frutas[0]";


//Alterando o Valor 0 -> banana para Melancia
$lista_frutas[0] = "Melancia";

echo "<hr>";
echo $lista_frutas[0];

echo "<br/>";

//Exemplo 3
//Criando a array Lista de frutas

$lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo "<hr>";
echo '</pre>';

echo '<pre>';
//Alterando o valor 0 -> Banana para Melancia
$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo "<br/>";

echo $lista_frutas[0];


?>