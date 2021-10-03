<?php

	$host		=	"mysql11.kinghost.net";
	$login		=	"sonegociospr";
	$password	=	"sonegociospr";
	$base_dados	=	"sonegociospr";
	$host		=	"localhost";
	$login		=	"root";
	$password	=	"";
	$base_dados	=	"sonegociospr";

if (!$link = mysql_connect($host, $login, $password)) {
    echo 'Não foi possível conectar ao mysql';
    exit;
}

if (!mysql_select_db($base_dados, $link)) {
    echo 'Não foi possível selecionar o banco de dados';
    exit;
}


?>