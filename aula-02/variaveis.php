<?php
$nome = "Luciano";
$pessoaFisica = "Teste";

echo $nome;
echo $pessoaFisica . "<br>";

$nome = "@";

echo "Nome: " . $nome;
echo "<br>";

echo gettype($nome);


?>