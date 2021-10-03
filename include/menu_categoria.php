<?php
	$row_categoria=null;
	$result_categoria=null;					
	$sql_categoria="SELECT * FROM categorias order by nome asc";
	$result_categoria=mysql_query($sql_categoria, $link);
	while ($row_categoria = mysql_fetch_assoc($result_categoria)) {		
?>
	<li><a href="?id_categoria=<?php echo $row_categoria["id_categoria"]?>&pagina=produto"><?php echo $row_categoria['nome'];?></a></li>
<?php
	}
	mysql_free_result($result_categoria);
?>
