<?php
	if (isset($_SESSION))
	{
		session_start();
		$_SESSION = array();
		//Elimina os dados da sess�o
		session_unregister($_SESSION['id']);
		session_unregister($_SESSION['nome']);
		session_unregister($_SESSION['login']);
		//Encerra a sess�o
		session_destroy();		
	}
	header("Location:index.php");
?>	