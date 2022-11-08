<?php 
session_start();
if($_SESSION['passouquestionario'] == 'usuariopassounoquestionario'){
	header('Location: inicio.php');
}
?>
<?php
include_once("conexao.php");
$usuario =  filter_input(INPUT_GET, 'usuario');
$query = mysqli_query($conecta, "SELECT * FROM usuarios WHERE Usuario = '$usuario'");
$quantidade = mysqli_num_rows($query);
if($quantidade > 0){
	echo "

	<div style=\" position: absolute; top: 505px;left: 425px; width: 300px; \"><h2 style=\" color: #D32F2F; font-size: 12px; font-family: Century Gothic, arial; left: 5px; position: absolute; \"  >* Nome de usuario já esta sendo utilizado!</h2></div>";
}else{
	echo "";
}

?>