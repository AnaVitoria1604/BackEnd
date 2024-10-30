<?php

//modelo => entidade
class Funcionario {
    
//atributos -> Caracteristicas
    public $nome = 'jose';
    public $telefone = null;
    public $num = 2;

//metodos -> ação
    function resumirCadFunc(){
        //este é o resumo do cadastro do funcionario
        return "$this->nome possui $this->num Filho(s)";

    }
    function modificarNumFilhos($Filhos){
    //afetar um atributo do objeto
    $this->numFilhos = $Filhos;
    }

        function modificarNome($AlterarNome){
        $this->nome = $AlterarNome ; 
    }

}
//objeto -> identidade
$y = new funcionario();
echo $y->resumirCadFunc(); //Para acessar atributos ou métodos usamos 0 ->
echo '<hr>';
$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();
echo '<hr>';

$x = new Funcionario ();
$x->modificarNome('Gilmar');
echo $x->resumirCadFunc();
echo '<hr>';
?>