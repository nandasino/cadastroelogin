<?php
session_start();
require_once("servidor.php");
if (!empty($_SESSION['mensagem'])){
	echo $_SESSION['mensagem'];
	unset($_SESSION['mensagem']);
	}
	if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])){
		$id=$_SESSION['id'];
		$nome=$_SESSION['nome'];
	}
?>
<form action="validar.php" method="post" accept-charset="utf-8">
	Login<br><input type="text" name="login"><br>
	Senha<br><input type="password" name="senha"><br>
	<input type="submit" name="enviar">
</form>
<a href="cadastro.php"><button>Cadastrar</button></a>