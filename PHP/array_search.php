<?php

//Cria um array chamado $frutas contendo tres elementos
$frutas = array("Maçã", "Banana", "Laranja");
 
//procura o valor "Banana" no array $frutas e armazena o índice na variavel $índice
$indice = array_search("Banana", $frutas);

//verifica se $indice não é igual a false, que significa que "Banan" foi encontrado na array, se não, ele dirá
if ($indice !== false) {
    echo "Banana foi encontrada na posição: " . $indice;
}else{
    echo "Banana não foi encontrada na lista de frutas";
}

?>