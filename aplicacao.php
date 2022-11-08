<?php 
session_start();
if($_SESSION['usuariologado'] != 'comsucesso'){
	header('Location: inicio.php');
	exit;
}
include_once("conexao.php");
$nome = $_SESSION['nameusuario'];
$query = mysqli_query($conecta, "SELECT * FROM usuarios WHERE Usuario = '$nome' and AplicacaoCriada = '1'");
$quantidade = mysqli_num_rows($query);
if($quantidade > 0){
	$_SESSION['erroaplicacao']='sim';
	header('Location: inicio.php');
	exit;
}else{
	$_SESSION['erroaplicacao']='nao';
}
?>
<!DOCTYPE html>

<html>
<head>
	<title>American State's Roleplay</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="CSS/estilo.css"/>
	<link rel="stylesheet" href="CSS/font-awesome.css"/>
	<link href='https://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
	<script
  	src="https://code.jquery.com/jquery-1.12.4.min.js"
  	integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  	crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script>
	</script>
</head>
<body>
	<img src="plan.jpg" style=" position: absolute; left: -0px; top: -10px; width: 100%; position: fixed; ">

	<div id="menu"> 
		<ul>
			<li><a href="#">EQUIPE</a></li>
			<li><a href="#">PAGINA</a></li>
			<li><a href="#">FORUM</a></li>
		</ul>
	</div>
	<?php
	session_start();
	if($_SESSION['usuariologado'] != 'comsucesso'){
		echo "<div style=\" position: absolute; width: 300px; height: 350px; background-color: white; border-radius: 9px; right: 50px; top: 80px; border: #9E9E9E 1px solid;\">
			

		<h2 style=\" position: absolute; color: #212121; font-family: 'Century Gothic', arial; font-size: 35px; left: 90px; \">Entrar</h2>

			<form method=\"post\" action=\"login.php\" >
			<div style=\" position: absolute; left: 5px; \">
			<input type=\"text\" name=\"usuario\" value=\"  Usuario\" onfocus=\"if (this.value=='  Usuario') this.value='';\" onblur=\"if (this.value=='') this.value='  Usuario'\" style=\" text-align: left; width: 200px; height: 25px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; position: absolute; left: 60px; top: 116px; color: #9C9C9C; \">

			<div style=\" border-top-left-radius: 5px; border-bottom-left-radius: 5px; background-color: #ffffff; width: 30px; height: 27px; position: absolute;  top: 116px; left: 29px; border: 1px solid #9E9E9E;\"><i class=\"fa fa-user\" aria-hidden=\"true\" style=\" position: absolute; left: 9px; top: 5px;\"></i></div>
			</div>

			<div style=\" position: absolute; left: 5px; top: 40px;\">
			<input type=\"text\" name=\"senha\" value=\"  Senha\" onfocus=\"if (this.value=='  Senha') this.value='';\" onblur=\"if (this.value=='') this.value='  Senha'\" style=\" text-align: left; width: 200px; height: 25px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; position: absolute; left: 60px; top: 116px; color: #9C9C9C; \">

			<div style=\" border-top-left-radius: 5px; border-bottom-left-radius: 5px; background-color: #ffffff; width: 30px; height: 27px; position: absolute;  top: 116px; left: 29px; border: 1px solid #9E9E9E;\"><i class=\"fa fa-lock\" aria-hidden=\"true\" style=\" position: absolute; left: 9px; top: 5px;\"></i></div>
			</div>

			<button type=\"submit\" style=\" border-radius: 8px; background-color: #2979FF; position: absolute; width: 200px; height: 30px; font-family: 'Century Gothic', arial; color: white; cursor: pointer; left: 50px; top: 200px; border: none; \">Entrar</button>
			</form>

			<a href=\"registro.php\"><button style=\" border-radius: 8px; background-color: #ffffff; border: #9E9E9E 1px solid; position: absolute; width: 200px; height: 30px; font-family: 'Century Gothic', arial; color: black; cursor: pointer; left: 50px; top: 240px; \">Registrar-se</button></a>
		</div>";
	}
	else if($_SESSION['usuariologado'] == 'comsucesso'){
		$nome = $_SESSION['nameusuario'];
		echo "<div style=\"position: absolute; width: 300px; height: 290px; background-color: white; border-radius: 9px; right: 50px; top: 80px; border: #9E9E9E 1px solid;\">
				<h2 style=\" color: #212121; position: absolute; font-family: 'Century Gothic', arial; left: 20px; top: 10px; font-size: 15px; \" >MENU</h2>
				<div style=\" background-color: #616161; height: 1px; width: 250px; position: absolute; top: 40px; left: 16px;  \"></div>

				<a href=\"#\"><div style=\" top: 50px; position: absolute; background-color: white; height: 30px; width: 300px; \"><i class=\"fa fa-plus\" aria-hidden=\"true\" style=\" color: #616161; position: absolute; font-size: 10px; top: 10px; left: 20px; \"><h2 style=\" color: #616161; font-size: 15px; top: -13px; left: 17px; position: absolute; font-family: 'Anaheim'; width: 300px; \">Criar um novo personagem</h2></i></div></a>

				<a href=\"#\"><div style=\" top: 90px; position: absolute; background-color: white; height: 30px; width: 300px; \"><i class=\"fa fa-home\" aria-hidden=\"true\" style=\" color: #616161; position: absolute; font-size: 10px; top: 10px; left: 20px; \"><h2 style=\" color: #616161; font-size: 15px; top: -13px; left: 17px; position: absolute; font-family: 'Anaheim'; width: 300px; \">Meus personagens</h2></i></div></a>

				<a href=\"#\"><div style=\" top: 130px; position: absolute; background-color: white; height: 30px; width: 300px; \"><i class=\"fa fa-cog\" aria-hidden=\"true\" style=\" color: #616161; position: absolute; font-size: 10px; top: 10px; left: 20px; \"><h2 style=\" color: #616161; font-size: 15px; top: -13px; left: 17px; position: absolute; font-family: 'Anaheim'; width: 300px; \">Configurações</h2></i></div></a>

				<a href=\"#\"><div style=\" top: 170px; position: absolute; background-color: white; height: 30px; width: 300px; \"><i class=\"fa fa-envelope\" aria-hidden=\"true\" style=\" color: #616161; position: absolute; font-size: 10px; top: 10px; left: 20px; \"><h2 style=\" color: #616161; font-size: 15px; top: -13px; left: 17px; position: absolute; font-family: 'Anaheim'; width: 300px; \">Notificações</h2></i></div></a>

				<a href=\"fechasess.php\"><div style=\" top: 250px; position: absolute; background-color: white; height: 30px; width: 300px; \"><i class=\"fa fa-power-off\" aria-hidden=\"true\" style=\" color: #616161; position: absolute; font-size: 10px; top: 10px; left: 20px; \"><h2 style=\" color: #616161; font-size: 15px; top: -13px; left: 17px; position: absolute; font-family: 'Anaheim'; width: 300px; \">Sair</h2></i></div></a>



			</div>

		";
	}
	?>
	<?php
	$vsenha = isset($_SESSION['senhaincorreta']);
	$vusuario = isset($_SESSION['usuarioincorreto']);
	if($vusuario == 'true'){
		echo "<div style=\" background-color: #B71C1C; opacity: 0.6; border-radius: 5px; height: 30px; width: 230px; position: absolute; left: 1050px; top: 390px; border: #FF0000 2px solid; \"><h2 style=\" color: white; position: absolute; left: 50px; top: -5px; font-family: 'Century Gothic', arial; font-size: 15px;\" >Usuario incorreto!</h2></div>";
		session_unset();
		session_destroy();
	} 
	if($vsenha == 'true'){
		echo "<div style=\" background-color: #B71C1C; opacity: 0.6; border-radius: 5px; height: 30px; width: 230px; position: absolute; left: 1050px; top: 390px; border: #FF0000 2px solid; \"><h2 style=\" color: white; position: absolute; left: 50px; top: -5px; font-family: 'Century Gothic', arial; font-size: 15px;\" >Senha incorreta!</h2></div>";
		session_unset();
		session_destroy();
	} 
	?>

	<div style=" position: absolute; width: 890px; height: 1200px; background-color: white; border: #9E9E9E 1px solid; left: 100px; top: 170px; border-radius: 7px; ">
		<h2  style=" font-size: 25px; color:#212121; font-family: 'Anaheim'; left: 40px; position: absolute; ">Criar novo personagem</h2>
		<div style=" height: 1px; width: 850px; background-color: #212121; left: 20px; top: 55px; position: absolute; "></div>

		<div style=" height: 30px; width: 600px; background-color: #DD2C00; font-family: 'Abel'; position: absolute; top: 80px; left: 23px; border-radius: 5px; opacity: 0.4; text-align: left; color: #ffffff; padding: 10px; "> Para poder criar um personagem você devera criar uma aplicação. </div>

		<div style=" height: 30px; width: 600px; background-color: #D50000; font-family: 'Abel'; position: absolute; top: 140px; left: 23px; border-radius: 5px; opacity: 0.4; text-align: left; color: #ffffff; padding: 10px; "> Atenção: Os dados que você inserir abaixo são os dados do seu personagem. </div>

		<div style=" height: 30px; width: 600px; background-color: #212121; font-family: 'Abel'; position: absolute; top: 200px; left: 23px; border-radius: 5px; opacity: 0.4; text-align: left; color: #ffffff; padding: 10px; "> Você deverá esperar sua aplicação ser avaliada por administradores. </div>


		<form method="post" action="criaraplicacao.php">

		<div style=" position: absolute; top: 270px; left: 40px; "><h2 style=" font-family: 'Alegreya Sans'; font-size: 15px; color: #212121;">Nome do personagem(Nome_Sobrenome)</h2><input required="text" type="text" name="personagem" style=" border-radius: 2px; border: 1px solid #757575; top: 30px; height: 20px; width: 260px; " placeholder="  Nome_Sobrenome"></div>

		<div style=" position: absolute; top: 270px; left: 420px; "><h2 style=" font-family: 'Alegreya Sans'; font-size: 15px; color: #212121;">Local de origem</h2><input required="text" type="text" name="origem" style=" border-radius: 2px; border: 1px solid #757575; top: 30px; height: 20px; width: 260px; " placeholder="  Local de origem"></div>

		<div style=" position: absolute; top: 350px; left: 40px; "><h2 style=" font-family: 'Alegreya Sans'; font-size: 15px; color: #212121;">Data de nascimento(DD/MM/AA)</h2><input required="text" type="text" name="nascimento" placeholder="  DD/MM/AA" style=" border-radius: 2px; border: 1px solid #757575; top: 30px; height: 20px; width: 260px; "></div>

		<div style=" position: absolute; top: 430px; left: 40px; "><h2 style=" font-family: 'Alegreya Sans'; font-size: 15px; color: #212121;">Escreva uma historia para seu personagem (no minimo 2 parágrafos)</h2><textarea required="textarea" type="text" name="historia" style=" border-radius: 2px; border: 1px solid #757575; top: 30px; height: 250px; width: 800px; text-align: left; resize: none;" placeholder="Digite sua respostas detalhadamente, com no maximo 2000 caracteres. " maxlength="5000"></textarea></div>

		<div style=" position: absolute; top: 750px; left: 40px; "><h2 style=" font-family: 'Alegreya Sans'; font-size: 15px; color: #212121;">Eis que você toma um tiro na cabeça no meio de um tiroteio, demonstre o que você faria explicando com os comandos /me e /do</h2><textarea required="textarea" type="text" name="pergunta" style=" border-radius: 2px; border: 1px solid #757575; top: 30px; height: 250px; width: 800px; text-align: left; resize: none;" placeholder="Digite sua respostas detalhadamente, com no maximo 2000 caracteres. " maxlength="5000"></textarea></div>

		<input style=" height: 30px; width: 100px; top: 1150px; left: 400px; position: absolute; font-family: 'Century Gothic', arial; border-radius: 5px; cursor: pointer; background-color: #0091EA; color: white; border-color: #0091EA; " type="submit" name="enviar">
		</form>

	<div style=" height: 30px; width: 600px; background-color: #212121; font-family: 'Abel'; position: absolute; top: 1080px; left: 23px; border-radius: 5px; opacity: 0.4; text-align: left; color: #ffffff; padding: 10px; "> Após sua aplicação ser aceita você devera logar no servidor com seu nome de usuario da conta. </div>

	</div>

	<div id="resultado"></div>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
	$("input[name='personagem']").on('blur', function(){
	  var nick = $(this).val();
	  $.get('validarnomeaplicacao.php?nick=' + nick, function(data){
	    $('#resultado').html(data);
	  });
	});
	</script>


	<div style=" position: absolute; top: 1800px; width: 10px; height: 10px; "></div>
</body>
</html> 