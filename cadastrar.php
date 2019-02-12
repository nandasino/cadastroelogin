<?php
session_start();
include_once("servidor.php");
if (isset($_GET['enviar'])) {
	if(!empty($_GET['nome']) || !empty($_GET['login']) || !empty($_GET['senha'])){
		$nome=$_GET['nome'];
		$login=$_GET['login'];
		$senha=MD5($_GET['senha']);
		$comando="INSERT INTO usuarios(login, senha, nome) VALUES ('$login','$senha','$nome')";
		$enviar=mysqli_query($conn, $comando);
		if($enviar){
			$_SESSION['mensagem']="cadastrado com sucesso";
			header("location:index.php");
			exit;

		}else{
			$_SESSION['mensagem']="Erro no cadastro";
			header("location:cadastro.php");
			exit;
		}
	}else{
		$_SESSION['mensagem']="Campo em branco";
			header("location:cadastro.php");
			exit;
	}
	}else{
		header("location:index.php");
			exit;
	}
?>