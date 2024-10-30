<?php
//modelo -> entidade

class livro {
    
    //Atributos -> Características
    public $titulo = "Lado feio do amor";
    public $autor = 'Collen hoover';
    public $anopublicacao = 2015;

    //metodo -> ação
    function resumirCadFunc(){
        return "Livro $this->titulo, escrito por $this->autor no ano $this->anopublicacao";
    }
    function modificaranopublicacao($anopublicacao){
        $this->anopublicacao = $anopublicacao;
    }

}

//obejto -> identidade
$y = new livro();
echo $y->resumirCadFunc();
echo '<hr>';

$x = new livro();
$x->modificaranopublicacao(2019);
echo $x->resumirCadFunc();
echo '<hr>';

?>