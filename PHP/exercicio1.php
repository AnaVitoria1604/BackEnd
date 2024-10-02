<?php
// primeiro a gente declara as variaveis, ou seja, as notas das provas
$nota1 = 7;
$nota2 = 6;
$nota3 = 8;

//depois colocamos o if e o else em pratica, ou seja, "if" se a nota for maior ou igual a 7 ele passa, "else" for menor que 7 ele reprova.
echo "A 1° nota é: $nota1 <br/>";
if ($nota1 >= 7) {
    echo "Aprovado! <br/>";
}else{
    echo "Reprovado! <br/>";
}
echo "A 2° nota é: $nota2 <br/>";
if ($nota2 >= 7) {
    echo "Aprovado! <br/>";
}else{
    echo "Reprovado! <br/>";
}
echo "A 3° nota é: $nota3 <br/>";

if ($nota3 >= 7) {
    echo "Aprovado! <br/>";
}else{
    echo "Reprovado! <br/>";
}

?>