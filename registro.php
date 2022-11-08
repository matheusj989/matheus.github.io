<?php 
session_start();
if($_SESSION['usuariologado'] == 'comsucesso'){
	header('Location: inicio.php');
	$_SESSION['erroregistro']='sim';
	exit;
}
?>
<!DOCTYPE html>

<html>
<head>
	<title>American State's Roleplay</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="CSS/estilo.css"/>
	<link rel="stylesheet" href="CSS/font-awesome.css"/>
	<script type="text/javascript">
	
	</script>
</head>
<body>
	<img src="plan.jpg" style=" position: absolute; left: -0px; top: -10px; width: 100%; position: fixed; ">
	<div id="menu"> 
		<!--<div><img src="Imagens/logo3.png" style=" width: 300px; height: 120px; top: -17px; position: absolute; cursor: pointer; "></div>-->
		<ul>
			<li><a href="#">EQUIPE</a></li>
			<li><a href="#">PAGINA</a></li>
			<li><a href="#">FORUM</a></li>
		</ul>
	</div>

	<div style=" position: absolute; width: 300px; height: 350px; background-color: white; border-radius: 9px; right: 50px; top: 80px; border: #9E9E9E 1px solid;">
		

	<h2 style=" position: absolute; color: #212121; font-family: 'Century Gothic', arial; font-size: 35px; left: 90px; ">Entrar</h2>

		<form method="post" action="login.php" >
		<div style=" position: absolute; left: 5px; ">
		<input type="text" name="usuario" value="  Usuario" onfocus="if (this.value=='  Usuario') this.value='';" onblur="if (this.value=='') this.value='  Usuario'" style=" text-align: left; width: 200px; height: 25px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; position: absolute; left: 60px; top: 116px; color: #9C9C9C; ">

		<div style=" border-top-left-radius: 5px; border-bottom-left-radius: 5px; background-color: #ffffff; width: 30px; height: 27px; position: absolute;  top: 116px; left: 29px; border: 1px solid #9E9E9E;"><i class="fa fa-user" aria-hidden="true" style=" position: absolute; left: 9px; top: 5px;"></i></div>
		</div>

		<div style=" position: absolute; left: 5px; top: 40px; ">
		<input type="text" name="senha" value="  Senha" onfocus="if (this.value=='  Senha') this.value='';" onblur="if (this.value=='') this.value='  Senha'" style=" text-align: left; width: 200px; height: 25px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; position: absolute; left: 60px; top: 116px; color: #9C9C9C; ">

		<div style=" border-top-left-radius: 5px; border-bottom-left-radius: 5px; background-color: #ffffff; width: 30px; height: 27px; position: absolute;  top: 116px; left: 29px; border: 1px solid #9E9E9E;"><i class="fa fa-lock" aria-hidden="true" style=" position: absolute; left: 9px; top: 5px;"></i></div>
		</div>

		<button type="submit" style=" border-radius: 8px; background-color: #2979FF; position: absolute; width: 200px; height: 30px; font-family: 'Century Gothic', arial; color: white; cursor: pointer; left: 50px; top: 200px; border: none; ">Entrar</button>
		</form>

		<a href="registro.php"><button style=" border-radius: 8px; background-color: #ffffff; border: #9E9E9E 1px solid; position: absolute; width: 200px; height: 30px; font-family: 'Century Gothic', arial; color: black; cursor: pointer; left: 50px; top: 240px; ">Registrar-se</button></a>
	</div>

	<div style=" position: absolute; width: 890px; height: 1550px; background-color: white; border: #9E9E9E 1px solid; left: 100px; top: 170px; border-radius: 7px; ">
		
		<h2 style=" font-family: 'Century Gothic', arial; color: #212121; font-size: 25px; text-align: center; top: 10px; ">ETAPA 1</h2>

		<div style=" border: #FF0000 2px solid; background-color: #B71C1C; opacity: 0.6; height: 250px; width: 800px; left: 45px; position: absolute; top: 100px; border-radius: 3px; ">
			<h2 style=" color: white; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; ">
			1.  Responda o questionario abaixo para poder criar a sua conta.<br />
			2.  Após concluir o questionario você devera passar suas informações pessoais.<br />
			3.  Para poder jogar você devera criar uma aplicação!<br />
			4.  Você devera aguardar até que administradores avalie sua aplicação, e caso for aceita podera jogar.
			</h2>
			<h2 style=" color: white; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 140px; position: absolute;  ">Para responder ao questionario você deve saber as regras do servidor:</h2>
			<a href="#" style=" color: #2196F3; text-decoration: none; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 180px; position: absolute; left: 0px; ">Regras do servidor(CLIQUE AQUI)</a>
			<a href="#" style=" color: #2196F3; text-decoration: none; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 200px; position: absolute; left: 0px; ">Guia para novatos(CLIQUE AQUI)</a>
		</div>
		<form method="post" action="registro2.php" >
			<div style=" position: absolute; top: -20px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">1.O que é Metagaming?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial'; ">
					<input type="radio" name="question1" value="certo" />Ato de expressar ações que os personagens não podem ver, ouvir, tocar.<br />
					<input type="radio" name="question1" value="errado" />Ato de correr e pular com o personagem ao mesmo tempo.<br />
					<input type="radio" name="question1" value="errado" />Ato de xingar outras personagens com meta de brigar.
				</div>
			</div>

			<div style=" position: absolute; top: 100px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">2.O que é Powergaming?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial';">
					<input type="radio" name="question2" value="errado" />Ações que não são humanamente impossiveis de se fazer.<br />
					<input type="radio" name="question2" value="errado" />Ações que são humanamento possiveis de se fazer.<br />
					<input type="radio" name="question2" value="certo" />Ações que são humanamente impossiveis de se fazer.
				</div>
			</div>

			<div style=" position: absolute; top: 220px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">3.Qual a serventia do comando /me?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial'; ">
					<input type="radio" name="question3" value="errado">Realizar ações que podem ser realizadas no jogo.<br />
					<input type="radio" name="question3" value="certo">Realizar ações que não podem ser realizadas no jogo.<br />
					<input type="radio" name="question3" value="errado">Realizar ações para assaltar uma pessoa.
				</div>
			</div>

			<div style=" position: absolute; top: 340px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">4.Qual opção esta correta?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial'; ">
					<input type="radio" name="question4" value="errado">/me nota Frank_Castle logo acenando com a head.<br />
					<input type="radio" name="question4" value="errado">/me abre a porta do carro xutando com muiinta força.<br />
					<input type="radio" name="question4" value="certo">/me gargalha.
				</div>
			</div>

			<div style=" position: absolute; top: 460px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">5.Qual o modo de jogo o servidor é baseado?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial'; ">
					<input type="radio" name="question5" value="errado">RP/G.<br />
					<input type="radio" name="question5" value="errado">RPG.<br />
					<input type="radio" name="question5" value="certo">RP.
				</div>
			</div>

			<div style=" position: absolute; top: 580px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">6.Onde se passa o servidor?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial'; ">
					<input type="radio" name="question6" value="certo">Estados Norte Americanos.<br />
					<input type="radio" name="question6" value="errado">Estados Unidos.<br />
					<input type="radio" name="question6" value="errado">EUA.
				</div>
			</div>

			<div style=" position: absolute; top: 700px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">7.O que é chat OOC?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial'; ">
					<input type="radio" name="question7" value="errado">Chat Oflline ou Off.<br />
					<input type="radio" name="question7" value="certo">Chat Out of Character.<br />
					<input type="radio" name="question7" value="errado">Nenhuma das alternativas.
				</div>
			</div>

			<div style=" position: absolute; top: 820px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">8.O que fazer quando você for roubado?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial'; ">
					<input type="radio" name="question8" value="certo">Interpretar e fazer o devido roleplay.<br />
					<input type="radio" name="question8" value="errado">Ignorar e continuar o que estava fazendo.<br />
					<input type="radio" name="question8" value="errado">Não interpretar, não pode assaltar no servidor.
				</div>
			</div>

			<div style=" position: absolute; top: 940px; width: 600px; height: 10px; "><!-- 120px para pular para o proximo!-->
				<h3 style=" font-family: 'Courier New'; float: left; top: 400px; position: absolute; left: 30px; ">9.O que é aplicação?</h3>
				<div style=" position: absolute; top: 450px; left: 30px; font-family: 'Arial'; ">
					<input type="radio" name="question9" value="errado">Uma prova pratica para poder jogar no servidor.<br />
					<input type="radio" name="question9" value="errado">Uma aplicação.<br />
					<input type="radio" name="question9" value="certo">Criação de personagem.
				</div>
			</div>

			<a href="registro2.php"><button type="submit" style=" border-radius: 5px; background-color: #2979FF; height: 30px; width: 100px; font-family: 'Century Gothic', arial; color: white; cursor: pointer; border: none; position: absolute; top: 1500px; left: 210px; ">Enviar</button></a>
			<a href="inicio.php"><button style=" cursor: pointer; border-radius: 5px; height: 30px; width: 150px; font-family: 'Century Gothic', arial; color: black; border: none; position: absolute; top: 1500px; left: 30px; border: #9E9E9E 1px solid; text-align: right; "><i class="fa fa-chevron-left" aria-hidden="true" style=" color: #9E9E9E; position: absolute; left: 30px; top: 9px; "></i>Voltar ao inicio</button></a>
		</form>
	</div>

	<div style=" position: absolute; top: 1800px; width: 10px; height: 10px; "></div>
</body>
</html> 