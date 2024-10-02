<?php

//Cria um array multidimencionl chamado $usuarios com subarrays que contêm informações de usuarios.
$usuarios = [
    [  "id" => 1,
       "nome" => "joao",
       "email" => "joao@example.com"],
    [  "id" => 2,
       "nome" => "maria",
       "email" => "maria@example.com"],
    [  "id" => 3,
       "nome" => "pedro",
       "email" => "pedro@example.com"]
];

//define a variavel $busca com valor que deseja procurar no array.
$busca = "pedro@example.com";

//exibe a estrutura do array $usuarios de forma legível
echo '<pre>';
print_r($usuarios);
echo '<pre/>';

//procura o valor aramazenado na variavel $busca no array $usuarios, especificamente no campo 'nome'.
$indice = array_search($busca, array_column($usuarios, 'email'));

//Verifica se $indice não é igual a false, o que significa que o valor em $busca foi encontrada no array .
if ($indice !== false) {
    //se o valor em $busca for encontrado, exibe o ID
    echo "$busca foi encontrada com ID: " . $usuarios[$indice]['id'];
}else{
    //se o valor em $busca não foi encontrado, exibe uma mensagem indicando isso
    echo "$busca não foi encontrada na lista de usuários";
}

?>














];