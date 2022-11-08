<?php
include_once("conexao.php");
$usuario =  $_POST['usuario'];
$senha = $_POST['senha'];
$query = mysqli_query($conecta, "SELECT * FROM usuarios WHERE Usuario = '$usuario'");
$quantidade = mysqli_num_rows($query);
session_start();
if($quantidade == 0){
	$_SESSION['usuarioincorreto']='true';
	header("Location: inicio.php");
}
$query2 = mysqli_query($conecta, "SELECT * FROM usuarios WHERE Senha = '$senha'");
$quantidade2 = mysqli_num_rows($query2);
if($quantidade2 == 0){
	$_SESSION['senhaincorreta']='true';
	header("Location: inicio.php");
}
if($quantidade == 1 && $quantidade2 == 1){
	$_SESSION['usuariologado']='comsucesso';
	$_SESSION['nameusuario']=$usuario;
}
header('Location: inicio.php');
?>