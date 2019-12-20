<table width="620px">
	<tr>
		<td width="20px"></td>
		<td width="200px">titulo</td>
		<td width="200px">autor</td>
		<td width="200px">fecha</td>
		<td width="200px">respuesta</td>
	</tr>
<?php
	include("conexionBD.php");
	$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$fecha = $row['fecha'];
		$autor = $row['autor'];
		$respuestas = $row['respuestas'];

			echo "<a href='foro.php?id=$id'><br>ver</a>";
			echo "$titulo";
			echo "$autor";
			echo "$respuestas";

	}
?>
</table>
<a href="formulario.php"> nuevo tema </a>
