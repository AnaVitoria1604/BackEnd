<?php

//EXEMPLO 1

//Cria um array chamado $frutas contendo tres elementos
$frutas = array("Maçã", "Banana", "Laranja");

//Verifica se a "banana" está no array $frutas
if (in_array("Banana", $frutas)){
// se estiver, ele ira dizer que está e se não estiver, ele dirá que não está
    echo "Banana está na lista de frutas.";
}else{
    echo "Banana não está na lista de frutas.";
}

//EXEMPLO 2
echo "<br/>";

//Cria um array chamado $frutas contendo tres elementos
$frutas = array("Maçã", "Banana", "Laranja", "Uva");

//adicionando mais uma variavel
$nome_fruta = "Uva";

//Verifica se $nome_fruta está no array $frutas
if (in_array($nome_fruta, $frutas)){
// se estiver, ele ira dizer que está e se não estiver, ele dirá que não está
    echo "$nome_fruta está na lista de frutas.";
}else{
    echo "$nome_fruta não está na lista de frutas.";
}

?>