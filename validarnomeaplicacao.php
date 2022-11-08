<?php
include_once("conexao.php");
$nick =  filter_input(INPUT_GET, 'nick');
$query = mysqli_query($conecta, "SELECT * FROM usuarios WHERE Usuario = '$nick'");
$quantidade = mysqli_num_rows($query);
if($quantidade > 0){
	echo "

	<div style=\" position: absolute; top: 487px;left: 400px; width: 300px; \"><i style=\" color: #D32F2F; left: 5px; position: absolute; \" class=\"fa fa-times\" aria-hidden=\"true\"></i></div>";
}else{
	echo "

	<div style=\" position: absolute; top: 487px;left: 400px; width: 300px; \"><i style=\" color: #00FF00; left: 5px; position: absolute; \" class=\"fa fa-check\" aria-hidden=\"true\"></i></div>";
}

?>