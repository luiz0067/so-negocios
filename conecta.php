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
    echo 'N�o foi poss�vel conectar ao mysql';
    exit;
}

if (!mysql_select_db($base_dados, $link)) {
    echo 'N�o foi poss�vel selecionar o banco de dados';
    exit;
}


?>