<?php
// 1 a 50
for ($i = 1; $i <= 50; $i++ ) {
    //faz raiz quadrada
    $riazquadrada = sqrt($i);

    //resultado
    echo "A raiz quadrada de: $i é " . number_format($riazquadrada, 4) . "<br>";
}
?>