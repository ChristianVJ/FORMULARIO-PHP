<html>
           <head>
                  <title> Formulario </title>
           </head>
		   
           <body>
                    <form id="entrada_datos" method="post" action="procesar.php" >
					<h1>Suscripción electrónica a nuestro boletín</h1>
					<p>Nota: Este es un formulario de ejemplo en el que los datos aquí escritos se trasladan a otra página
						<fieldset id="iniciar_sesion">
							<fieldset id="datos">
				
											<label> Nombre:</label>
												<INPUT TYPE="text" name="usuario" SIZE=8 MAXLENGTH=20>

											<label> Apellidos:</label>
												<INPUT TYPE="text" NAME="apellidos" SIZE=8 MAXLENGTH=20>

											<label> e-mail:</label>
												<INPUT TYPE="email" NAME="correo" SIZE=8 MAXLENGTH=20>

											<label> Contraseña:</label>
												<INPUT TYPE="password" NAME="clave" SIZE=8 MAXLENGTH=20>
								<table>
										<td>
											<br><br>
											<label>Sexo</label>
											<br><INPUT TYPE="radio" NAME="sexo" VALUE="Varón">Varón
											<br><INPUT TYPE="radio" NAME="sexo" VALUE="Mujer">Mujer
										</td>
										<td>
											<br><br>
											<label>Nivel de estudios:</label>
											<br><INPUT TYPE="radio" NAME="estudios" VALUE="Certificado escolar">Certificado escolar
											<br><INPUT TYPE="radio" NAME="estudios" VALUE="Graduado en E.S.O.">Graduado en E.S.O.
											<br><INPUT TYPE="radio" NAME="estudios" VALUE="Bachiller - Formación Profesional">Bachiller - Formación Profesional
											<br><INPUT TYPE="radio" NAME="estudios" VALUE="Diplomado">Diplomado
											<br><INPUT TYPE="radio" NAME="estudios" VALUE="Licenciado o Doctorado">Licenciado o Doctorado
										</td>
										<td>
											<br><br>
											<label>Interesado en los siguientes temas:</label>
											<br><INPUT TYPE="checkbox" NAME="musica" VALUE="Música">Música
											<br><INPUT TYPE="checkbox" NAME="deporte" VALUE="Deportes">Deportes
											<br><INPUT TYPE="checkbox" NAME="cine" VALUE="Cine">Cine
											<br><INPUT TYPE="checkbox" NAME="libro" VALUE="Libros">Libros
											<br><INPUT TYPE="checkbox" NAME="ciencia" VALUE="Ciencia">Ciencia
										</td>
								</table>		
											<br><br>
											<label>Día de la semana que le interesa recibirlo:</label>
											<br><br>
												<SELECT NAME="dia">
														<OPTION SELECTED="true" DISABLED="disabled">Dia de la semana:</OPTION>
														<OPTION VALUE="Lunes" >Lunes
														<OPTION VALUE="Martes">Martes
														<OPTION VALUE="Miércoles" >Miércoles
														<OPTION VALUE="Jueves">Jueves
														<OPTION VALUE="Viernes" >Viernes
														<OPTION VALUE="Sábado">Sábado
														<OPTION VALUE="Domingo" >Domingo
												</SELECT>
											<br><br>
											<label>Su opinión:</label>
											<br><br>
												<TEXTAREA NAME="comentario" COLS="60" ROWS="4" placeholder="Comentario:"></TEXTAREA>
							</fieldset>
							
										<br><br>
										<input type="submit" value="Comprobar el formulario" />
										<input type="reset" value="Borrar todo" />	
										
						</fieldset>
					</form>
			</body>
</html>