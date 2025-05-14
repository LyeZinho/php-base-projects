<!-- 
retorna os items dentro da variavel global do sistema
que contem os dados da aplicacao, como por exemplo o nome do app, a rota de acesso invalida e o autoload das classes
-->
<?php
// Exibe os itens da variável global do sistema que contém dados da aplicação,
// como o nome do app, rota de acesso inválida e autoload das classes.

echo '<pre>';
print_r($GLOBALS);
echo '<br>';
echo print_r($_SERVER);
echo '</pre>';
echo $_SERVER['SERVER_NAME'];
?>