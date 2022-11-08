<?php 
session_start();
if($_SESSION['passouquestionario'] == 'usuariopassounoquestionario'){
	header('Location: inicio.php');
}
?>
<?php
include_once("conexao.php");
$email =  filter_input(INPUT_GET, 'email');
$query = mysqli_query($conecta, "SELECT * FROM usuarios WHERE Email = '$email'");
$quantidade = mysqli_num_rows($query);
if($quantidade > 0){
	echo "

	<div style=\" position: absolute; top: 625px;left: 425px; width: 300px; \"><h2 style=\" color: #D32F2F; font-size: 12px; font-family: Century Gothic, arial; left: 5px; position: absolute; \"  >* Este email já esta sendo utilizado!</h2></div>";
}else{
	echo "";
}

?>