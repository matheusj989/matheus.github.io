<?php
// codigosnaweb.com - scripts grátis para o seu site
// PODE SER SEPARADO O TRECHO ABAIXO PARA SER CHAMADO POR INCLUDE
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCODEDADOS", "asrp");
$conecta = new mysqli(SERVIDOR, USUARIO, SENHA, BANCODEDADOS); // CONECTA
?>