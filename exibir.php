<html>

	<head>

		<title> .: Página com a criação da tabela :. </title>
		<meta charset='utf-8'>

	</head>

	<table border='1'>

		<tr>Tabela criada pelo FOR</tr>

	<?php

		$quantidade = $_POST['quantidade'];
		echo $quantidade;
		for($i = 1; $i <= $quantidade; $i++)
		{
		echo "<tr><td>Linha $i</td><td>Linha $i</td><td>Linha $i</td><td>Linha $i</td></tr>";
		}
	?>

	</table>

</html>
