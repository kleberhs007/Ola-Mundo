<?php
//O script ir� capturar o dado do formul�rio da p�gina ola.php e ir� atribuir o valor dela a uma vari�vel
$nome = $_POST['nome'];

//Exibe o resultado na tela
echo 'Ol�, ' . $nome . '. Seja bem vindo a este mundo !';
?>