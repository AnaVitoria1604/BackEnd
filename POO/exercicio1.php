<?php
class Aluno {
    //adicionando atributos
    public $nome = "Ana Vi";
    public $idade = 16;
    public $curso = "Modelagem do Vestuario";

    // rezumindo o cadastro
    function resumirCadFunc(){
        return "$this->nome tem $this->idade anos e estuda $this->curso";
    }
    //motificando o curso
    function modificarCurso($novocurso) {
        $this->curso = $novocurso;
    }

    //exibindo curso modificado
    function exibircurso() {
        return "Ana Vi modificou o curso para: $this->curso";
    }
}

$x = new Aluno();
echo $x->resumirCadFunc();
echo '<hr>';

//mostrando a modificação
$x->modificarCurso('Desenvolvimento de Sistemas');
echo $x->exibircurso();
echo '<hr>';

?>