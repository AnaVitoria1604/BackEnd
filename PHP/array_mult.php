<?php
//exemplo1
//Criando a Array Lista_coisas
$lista_coisas = [];

//Criando uma Array frutas, dentro da Array lista_coisas
$lista_coisas ['Frutas'] = ['Banana','Maçã','Morango','Uva'];

//Criando uma Array pessoas, dentro da Array_coisas
$lista_coisas ['Pessoas'] = ['João', 'José', 'Maria'];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

echo '<br/>';

//exemplo2
//Criando a Array Lista_coisas
$lista_coisas = [];

//Criando uma Array frutas, dentro da Array lista_coisas
$lista_coisas ['frutas'] = ['Banana','Maçã','Morango','Uva'];

//Criando uma Array pessoas, dentro da Array_coisas
$lista_coisas ['pessoas'] = ['João', 'José', 'Maria'];

//alterando o  terceiro valor array FRUTAS
$lista_coisas['frutas'][2] = 'Abacaxi';

//alterando o segundo valor da array PESSOAS
$lista_coisas['pessoas'][1] = 'Carlos';

echo "O terceiro valor da array FRUTAS agora é: ";
echo $lista_coisas['frutas'][2];

echo "<hr>";

echo "O segundo valor da array PESSOAS agora é: ";
echo $lista_coisas['pessoas'][1];


?>