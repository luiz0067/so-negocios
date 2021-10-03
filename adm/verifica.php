<?php
        
/*
        session_cache_expire(10);
	echo $_SESSION["login"];

	
	if (isset($_SESSION))
	{
		echo "oi";
		echo $_SESSION["login"];
		session_start();
                echo $_SESSION["nome"];
		//$_SESSION = array();

	}
	$row=null;
	$result=null;
	$sql    = "SELECT * FROM usuarios where (login='".$_SESSION["login"]."') and( senha='".$_SESSION["senha"]."')";
	$result=mysql_query($sql, $link);
	if (($result!=null)&&($_SESSION["login"]!=null)&&($_SESSION["senha"]!=null)){
		$row = mysql_fetch_assoc($result);
		if (($_POST["login"]==$row["login"])&&($_POST["senha"]==$row["senha"])){
			$_SESSION["id"]		= $row["id"];
			$_SESSION["nome"]	= $row["nome"];
			$_SESSION["login"]	= $row["login"];		
		}
	}
	else{
		?>
		<script type="text/javascript">
			self.location.href="./logout.php"
			//alert("<?php echo $_SESSION["login"];?>")
		</script>
		<?php
	}
	mysql_free_result($result);
*/	
?>		