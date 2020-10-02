<html>
	<head>
        <title> Resultado </title>
    </head>
    <body> 

        <?php
            header('Content-Type: text/html; charset=UTF-8'); 
			
			echo "<h1> Tus datos de suscripción</h1>";
			echo "<p> Estos son los datos que nos has enviado:</p>";

            if ($_POST['usuario']!="")
				echo "Nombre: " . $_POST['usuario'];
			else
				echo "Nombre: No has introducido un nombre";
			
			echo "<br></br>";
			
			if ($_POST['apellidos']!="")
				echo "Apellidos: " . $_POST['apellidos'];
			else
				echo "Apellidos: No has introducido los apellidos";
			
			echo "<br></br>";
			
			if ($_POST['correo']!="")
				echo "E-mail:" . $_POST['correo'];
			else
				echo "E-mail: No has introducido un email";
			
			echo "<br></br>";
			
			if ($_POST['clave']!="")
				echo "Contraseña: " . $_POST['clave'];
			else
				echo "Contraseña: No has introducido una contraseña";
			
			echo "<br></br>";
			
			if (isset($_POST['sexo']))
				echo "Sexo: " . $_POST['sexo'];
			else
				echo "Sexo: No has marcado tu sexo";
			
			echo "<br></br>";
			
			if (isset($_POST['estudios']))
				echo "Estudios: " . $_POST['estudios'];
			else
				echo "Estudios: No has indicado tus estudios";
			
			echo "<br></br>";
			
			if (isset($_POST['musica']))
				echo "Musica: Sí";
			else
				echo "Música: No";
			
			echo "<br></br>";
			
			if (isset($_POST['deporte']))
				echo "Deportes: Sí";
			else
				echo "Deportes No";
			
			echo "<br></br>";
			
			if (isset($_POST['cine']))
				echo "Cine: Sí";
			else
				echo "Cine: No";
			
			echo "<br></br>";
			
			if (isset($_POST['libro']))
				echo "Libros: Sí";
			else
				echo "Libros: No";
			
			echo "<br></br>";
			
			if (isset($_POST['ciencia']))
				echo "Ciencia: Sí";
			else
				echo "Ciencia: No";

			echo "<br></br>";
			
			if (isset($_POST['dia']))
				echo "Día de la semana: " . $_POST['dia'];
			else
				echo "Día de la semana:  No has indicado el día";
			
			echo "<br></br>";
			
			if ($_POST['comentario']!="")
				echo "Tu comentario: " . $_POST['comentario'];
			else
				echo "Comentario: No has introducido un comentario";

			echo "<br></br>";
        ?>
		
        <br><br>
		  
        <a href="formulario.php">Volver al formulario</a>
		
    </body>
</html>


