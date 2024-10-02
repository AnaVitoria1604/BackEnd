<?php
//exemplo2
//Criando a Array Cadastro
$cadastro = [];

//Criando uma Array usuario, dentro da Array cadastro
$cadastro ['usuario'] = ['Joao','maria','pedro'];

//Criando uma Array senha, dentro da cadastro
$cadastro ['senha'] = ['1234','abcd','5678'];

echo "<pre>";
print_r($cadastro);
echo "</pre>";

//alterando um dos valores da array USUARIO
$lista_coisas['usuario'][1] = 'Ana';

//alterando um dos valores da array SENHA
$cadastro['senha'][1] = 'efgh';

echo "O terceiro valor da array USUARIO agora é: ";
echo $cadastro['usuario'][1];

echo "<hr>";

echo "O segundo valor da array SENHA agora é: ";
echo $cadastro['senha'][1];

echo "<pre>";
print_r($cadastro);
echo "</pre>";

?>