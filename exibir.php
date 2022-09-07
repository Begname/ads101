<html>

	<head>

		<title> .: Página com a criação da tabela :. </title>
		<meta charset='utf-8'>

	</head>

	<table border='1'>

		<tr>Tabela criada pelo FOR</tr>

	<?php

		$quantidade_linhas = $_POST['quantidade_linhas'];
		$quantidade_colunas = $_POST['quantidade_colunas'];
		echo $quantidade_linhas;
		//echo ",";
		echo $quantidade_colunas;
		for($i = 1; $i <= $quantidade_linhas; $i++)
		{
		echo "<tr>";
		for($c = 1; $c <= $quantidade_colunas; $c++){
		echo "<td>Linha $i Coluna $c</td><td>Linha $i Coluna $c</td><td>Linha $i Coluna $c</td><td>Linha $i Coluna $c</td>"
		}
		"</tr>";
		}
	?>

	</table>

</html>
