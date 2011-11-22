<?php
//O script irá capturar o dado do formulário da página ola.php e irá atribuir o valor dela a uma variável
$nome = $_POST['nome'];

//Exibe o resultado na tela
echo 'Olá, ' . $nome . '. Seja bem vindo a este mundo !';
?>