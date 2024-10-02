<?php

//Exemplo com variavel numerico
$idade = 20;
$resultado = ($idade >= 18) ? "Maior de idade" : "menor de idade";
echo $resultado; //Saída: maior de idade

echo '<br/>';

//Exemplo com variavel numerico

$nome = "Ana";
$mensagem = ($nome == "Ana") ? "Ola, Ana!" : "Ola, visitante";
echo $mensagem; //Saída: Ola, Ana!

echo '<br/>';

$is_logged_in = true;

$mensagem = $is_logged_in ? 'Bem-vindo de volta!' : 'Por favor,faça loguin';
echo $mensagem

?>