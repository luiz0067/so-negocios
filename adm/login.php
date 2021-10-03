<?php
	include('conecta.php');
	
	$row=null;
	$result=null;	
	$sql    = "SELECT * FROM usuarios where (login='".$_POST["login"]."') and( senha='".$_POST["senha"]."')";
	$result=mysql_query($sql, $link);
	if (($result!=null)&&($_POST["login"]!=null)&&($_POST["senha"]!=null)){
		$row = mysql_fetch_assoc($result);
		if (($_POST["login"]==$row["login"])&&($_POST["senha"]==$row["senha"])){
			if (isset($_SESSION))
			{
				session_start();
				$_SESSION = array();
			}
			$_SESSION["id"]		= $row["id"];
			$_SESSION["nome"]	= $row["nome"];
			$_SESSION["login"]	= $row["login"];
			
			header("Location: principal.php");	
		}
		else{
			?>
			<div style="color:#FF0000">Usuario ou senha inválida</div>
			<?php
		}
		mysql_free_result($result);	
	}
	
?>
<form method="post">
   <input type="text" name="login"><br>
   <input type="password" name="senha"><br>
   <input type="submit" name="acao" value="ok"><br>
</form>	