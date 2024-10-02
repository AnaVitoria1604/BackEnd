<?php

//criando a Array cadastro

$cadastro = [];

//Criando Array nome, dentro da Array cadastro

$cadastro ['nome'] = ['Ana','Thays','Pedro','Gabriel','Maria'];

//Criando Array email, dentro da Array cadastro

$cadastro ['email'] = ['Ana@gmail.com','Thays@gmail.com','Pedro@gmail.com','Gabriel@gmail.com','Maria@gail.com'];

echo '<pre>';
echo "Array sem alterar";
print_r($cadastro);
echo '</pre>';

//alternando o indice 2 na Array nome
$cadastro['nome'][1] = 'SENAI';

//alternando o indice 0 na Array email
$cadastro['email'][0] = 'aluno@senai.br';

echo '<pre>';
echo "Array alterado Indice 1 (Thays-> SENAI)-> nome e inidice 0 (ana@ -> aluno@senai) email";
print_r($cadastro);
echo '</pre>';

//OK

echo '3° indice de nome é ';
echo $cadastro['nome'][2]; //Tem que aparcer Pedro

echo '<br/>';

echo '4° indice de email é ';
echo $cadastro['email'][3]; //Tem que aparecer gabriel@

echo '<br/>';

echo '2° indice de nome é ';
echo $cadastro['nome'][1];

echo '<br/>';

echo '1° indice de email é ';
echo $cadastro['email'][0];

echo '<pre>';
print_r($cadastro);
echo '</pre>';
?>











