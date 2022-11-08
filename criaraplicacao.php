<?php
include_once("conexao.php");
$nick = $_POST['personagem'];
$origem = $_POST['origem'];
$nascimento = $_POST['nascimento'];
$historia = $_POST['historia'];
$pergunta = $_POST['pergunta'];
$query = mysqli_query($conecta, "SELECT * FROM aplicacoes WHERE Nome = '$nick'");
$quantidade = mysqli_num_rows($query);
if($quantidade > 0){

}else{
	
}
?>