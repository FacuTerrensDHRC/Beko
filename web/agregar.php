<?php
	include("conexionBD.php");

	if(isset($_POST["submit"])){
		if(!empty($_POST['mensaje'])){
			$autor=$_POST['autor'];
			$titulo=$_POST['titulo'];
			$tema=$_POST['tema'];
			$mensaje=$_POST['mensaje'];
			$respuestas=$_POST['respuestas'];
			$identificador=$_POST['identificador'];
			$fecha = date("d-m-y");



			//Evitamos que el usuario ingrese HTML
			$mensaje = htmlentities($mensaje);
			echo "identificador:";
			echo $identificador;

			//Grabamos el mensaje en la base de datos.
			$query = "INSERT INTO foro (autor, titulo, mensaje, identificador, fecha, ult_respuesta, tema) VALUES ('$autor', '$titulo', '$mensaje', '$identificador','$fecha','$respuestas','$tema')";

			echo $query;
			echo "identificador:";
			echo $identificador;
			$result = $mysqli->query($query);

			/* si es un mensaje en respuesta a otro actualizamos los datos */
			if ($identificador != 0)
			{
				$query2 = "UPDATE foro SET respuestas=respuestas+1 WHERE ID='$identificador'";
				$result2 = $mysqli->query($query2);
				echo $query2;
				Header("Location: foro.php?id=$identificador");
				exit();
			}
			Header("Location: index_foro.php");
		}
	}
?>
