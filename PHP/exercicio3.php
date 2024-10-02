<?php
//declare as variaveis
$valor_compra = 500;
$desconto = 10;
$vip = 1;

echo "Sua compra foi de $valor_compra <br/>";

// if e else
if ($valor_compra >= 500.00){
    echo "cliente com desconto de $desconto <br/>";

}else if ($vip = 1){
    echo "Cliente com desconto de $desconto <br/>";

}else{
    echo "cliente sem desconto.";
}

?>