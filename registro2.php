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
	<script>
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


	<?php
		session_start();
		if($_POST['question1'] && $_POST['question2'] && $_POST['question3'] && $_POST['question4'] && $_POST['question5'] && $_POST['question6'] && $_POST['question7'] && $_POST['question8'] && $_POST['question9'] == 'certo' || $_SESSION['passouquestionario'] == 'usuariopassounoquestionario'){

				$_SESSION['passouquestionario']='usuariopassounoquestionario';
				echo "<div style=\" position: absolute; width: 890px; height: 850px; background-color: white; border: #9E9E9E 1px solid; left: 100px; top: 170px; border-radius: 7px; \">

					<h2 style=\" font-family: Century Gothic, arial; color: #212121; font-size: 25px; text-align: center; top: 10px; \">ETAPA 2</h2>

					<div style=\" border: #FF0000 2px solid; background-color: #B71C1C; opacity: 0.6; height: 250px; width: 800px; left: 45px; position: absolute; top: 100px; border-radius: 3px; \">
						<h2 style=\" color: white; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; \">
						1.  Responda o questionario abaixo para poder criar a sua conta.<br />
						2.  Após concluir o questionario você devera passar suas informações pessoais.<br />
						3.  Para poder jogar você devera criar uma aplicação!<br />
						4.  Você devera aguardar até que administradores avalie sua aplicação, e caso for aceita podera jogar.
						</h2>
						<h2 style=\" color: white; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 140px; position: absolute;  \">Para responder ao questionario você deve saber as regras do servidor:</h2>
						<a href=\"#\" style=\" color: #2196F3; text-decoration: none; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 180px; position: absolute; left: 0px; \">Regras do servidor(CLIQUE AQUI)</a>
						<a href=\"#\" style=\" color: #2196F3; text-decoration: none; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 200px; position: absolute; left: 0px; \">Guia para novatos(CLIQUE AQUI)</a>
					</div>


					<div style=\" border: #1B5E20 2px solid; background-color: #00FF00; opacity: 0.6; height: 80px; width: 800px; left: 45px; position: absolute; top: 400px; border-radius: 3px; \"><h2 style=\" color: white; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; \" >Você passou no questionario! agora nos passe todas as informações pessoais suas para terminar o processo.</h2></div>;

					<form method=\"post\" action=\"registro3.php\" >

						<div style=\" position: absolute; top: 500px; left: 45px; width: 200px; \"><h2 style=\" font-size: 15px; font-family: Century Gothic, arial; left: 5px; position: absolute; \"  >Nome de usuario<input required type=\"text\" type=\"text\" id=\"usuario\" name=\"usuario\" style=\" width: 200px; height: 25px; border-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; top: -5px; position: absolute; color: #9C9C9C; left: 140px; \"  ></input></h2></div>

						<div style=\" position: absolute; top: 540px; left: 45px; width: 200px; \"><h2 style=\" font-size: 15px; font-family: Century Gothic, arial; left: 5px; position: absolute; \"  >Senha<input required type=\"password\" \" type=\"password\" name=\"senha\" style=\" width: 200px; height: 25px; border-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; top: -5px; position: absolute; color: #9C9C9C; left: 140px; \"  ></input></h2></div>

						<div style=\" position: absolute; top: 580px; left: 45px; width: 200px; \"><h2 style=\" font-size: 15px; font-family: Century Gothic, arial; left: 5px; position: absolute; \"  ><input required type=\"password\" type=\"password\" name=\"senharedigite\" style=\" width: 200px; height: 25px; border-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; top: -5px; position: absolute; color: #9C9C9C; left: 140px; \"  ></input></h2></div>


						<div style=\" position: absolute; top: 620px; left: 45px; width: 200px; \"><h2 style=\" font-size: 15px; font-family: Century Gothic, arial; left: 5px; position: absolute; \"  >Email<input required type=\"email\" type=\"text\" name=\"email\" style=\" width: 200px; height: 25px; border-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; top: -5px; position: absolute; color: #9C9C9C; left: 140px; \"  ></input></h2></div>

						<div style=\" position: absolute; top: 660px; left: 45px; width: 200px; \"><h2 style=\" font-size: 15px; font-family: Century Gothic, arial; left: 5px; position: absolute; \"  >Chave(segurança)<input required type=\"text\" type=\"text\" name=\"chave\" style=\" width: 200px; height: 25px; border-radius: 5px; border: 1px solid #9E9E9E; background-color: #ffffff; top: -5px; position: absolute; color: #9C9C9C; left: 140px; \"  ></input></h2></div>

						<div  style=\" height: 50px; width: 340px;  border: #FF0000 2px solid; background-color: #B71C1C; opacity: 0.6; position: absolute; top: 720px; left: 50px; border-radius: 5px; \" ><h2 style=\" color: white; font-family: 'Courier New'; font-size: 12px; text-align: center; \" >Essa chave é importante para caso você perca sua senha!</h2></div>

						<a href=\"#\"><button type=\"submit\" style=\" cursor: pointer; border-radius: 5px; height: 30px; width: 100px; font-family: 'Century Gothic', arial; color: white; border: none; position: absolute; top: 790px; left: 215px; background-color: #2979FF; text-align: right; \"><i class=\"fa fa-check\" aria-hidden=\"true\" style=\" color: #ffffff; position: absolute; left: 10px; top: 9px; \"></i>Confirmar</button></a>

					</form>
					
						<a href=\"inicio.php\"><button style=\" cursor: pointer; border-radius: 5px; height: 30px; width: 150px; font-family: 'Century Gothic', arial; color: black; border: none; position: absolute; top: 790px; left: 50px; border: #9E9E9E 1px solid; text-align: right; \"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\" style=\" color: #9E9E9E; position: absolute; left: 30px; top: 9px; \"></i>Voltar ao inicio</button></a>

					";
		}
		else{
				echo "<div style=\" position: absolute; width: 890px; height: 600px; background-color: white; border: #9E9E9E 1px solid; left: 100px; top: 170px; border-radius: 7px; \">

					<h2 style=\" font-family: Century Gothic, arial; color: #212121; font-size: 25px; text-align: center; top: 10px; \">ETAPA 2</h2>

					<div style=\" border: #FF0000 2px solid; background-color: #B71C1C; opacity: 0.6; height: 250px; width: 800px; left: 45px; position: absolute; top: 100px; border-radius: 3px; \">
						<h2 style=\" color: white; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; \">
						1.  Responda o questionario abaixo para poder criar a sua conta.<br />
						2.  Após concluir o questionario você devera passar suas informações pessoais.<br />
						3.  Para poder jogar você devera criar uma aplicação!<br />
						4.  Você devera aguardar até que administradores avalie sua aplicação, e caso for aceita podera jogar.
						</h2>
						<h2 style=\" color: white; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 140px; position: absolute;  \">Para responder ao questionario você deve saber as regras do servidor:</h2>
						<a href=\"#\" style=\" color: #2196F3; text-decoration: none; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 180px; position: absolute; left: 0px; \">Regras do servidor(CLIQUE AQUI)</a>
						<a href=\"#\" style=\" color: #2196F3; text-decoration: none; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; top: 200px; position: absolute; left: 0px; \">Guia para novatos(CLIQUE AQUI)</a>
					</div>


					<div style=\" border: #FF0000 2px solid; background-color: #B71C1C; opacity: 0.6; height: 80px; width: 800px; left: 45px; position: absolute; top: 400px; border-radius: 3px; \"><h2 style=\" color: white; float: left; font-size: 15px; padding: 0px 10px; font-family: 'Courier New'; \" >Você não passou no questionario! re-leia as regras no forum e faça novamente.</h2></div>;

					<a href=\"registro.php\"><button style=\" cursor: pointer; border-radius: 5px; height: 30px; width: 150px; font-family: 'Century Gothic', arial; color: black; border: none; position: absolute; top: 500px; left: 45px; border: #9E9E9E 1px solid; text-align: right; \"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\" style=\" color: #9E9E9E; position: absolute; left: 30px; top: 9px; \"></i>Voltar ao inicio</button></a>

					";
		}

	?>
	<div id="resultado"></div>
	<div id="resultado2"></div>



	</div>

	<div style=" position: absolute; top: 1800px; width: 10px; height: 10px; "></div>
</body>
</html> 