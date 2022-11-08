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
	$erroapli = isset($_SESSION['erroaplicacao']);
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
	if($_SESSION['erroaplicacao'] == 'sim'){
		session_start();
		$_SESSION['erroaplicacao']='nao';
		echo "<div style=\"position: absolute; width: 300px; height: 85px; background-color: white; border-radius: 9px; right: 50px; top: 380px; border: #9E9E9E 1px solid;\">

		<div style=\" height: 55px; width: 260px; background-color: #B71C1C; opacity: 0.6; position: absolute; left: 18px; top: 15px; border-radius: 5px; border: #FF0000 2px solid; text-align: center; color: white; font-family: 'Century Gothic', arial; font-size: 15px; \">ERRO: Você já criou uma aplicação! aguarde ela ser avaliada.</div>

		</div>";
	}
	if($_SESSION['erroregistro'] == 'sim'){
		session_start();
		$_SESSION['erroregistro']='nao';
		echo "<div style=\"position: absolute; width: 300px; height: 60px; background-color: white; border-radius: 9px; right: 50px; top: 380px; border: #9E9E9E 1px solid;\">

		<div style=\" height: 30px; width: 260px; background-color: #B71C1C; opacity: 0.6; position: absolute; left: 18px; top: 15px; border-radius: 5px; border: #FF0000 2px solid; text-align: center; color: white; font-family: 'Century Gothic', arial; font-size: 15px; \">ERRO: Você já possui uma conta.</div>

		</div>";
	}
	?>
</body>
</html> 