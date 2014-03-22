<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>ZeloForm v1</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/zeloform_styles.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>
<!--PopUp-->
<div class="op_up_validation">
	<div class="op_up_validation_bg"></div>
	<div class="op_up_validation_bg_info">
		<div class="op_up_validation_bg_info_cont">
			<div class="op_up_validation_bg_info_cont_c">
				<p>
					<strong>
						UPS :(
					</strong>
					<br>
					<strong class="fi_control_filecon fi_control_filecon_hide">
						Escribe tu nombre
					</strong>
					<br>
					<strong class="fi_control_filecon_1 fi_control_filecon_hide">
						Escribe tu Email
					</strong>
					<br>
					<strong class="fi_control_filecon_2 fi_control_filecon_hide">
						Escribe un Asunto para el mail
					</strong>
					<br>
					<strong class="fi_control_filecon_3 fi_control_filecon_hide">
						Importante, falta el mensaje
					</strong>
					<br>
					Debe rellenar todos los datos por favor.
					<br>
					<span>
						Los campos deben tener un minimo de 7 digitos.
						<br><br>
						<span class="color_red_textpoup">
							Recuerda que esta informacion es confidencial y no la compartiremos con nadie.
						</span>
					</span>
				</p>
				<img src="img/error_form.png" alt="img" class="error_form_img">
			</div>
		</div>
	</div>
</div>
<!--PopUp-->

<!--Contenedor del formulario-->
	<div id="cont_form">
		<div id="cont_form_int">
			<div id="cont_form_int_con">
				<div id="cont_form_int_con_con">
					<h2>
						<strong>Z</strong>elo<i>Form</i>
					</h2>

					<form id="zeloform_k" method="post" action="send_inf_form.php">
					<div>
						<input type="text" name="name_inp1" class="input_textform_name input_textform" value="Nombre" onclick="if(this.value=='Nombre') this.value=''" onblur="if(this.value=='') this.value='Nombre'">
					</div>

					<div>
						<input type="text" name="mail_inp2" class="input_textform_mail input_textform" value="E-Mail" onclick="if(this.value=='E-Mail') this.value=''" onblur="if(this.value=='') this.value='E-Mail'">
					</div>

					<div>
						<input type="text" name="asunto_inp3" class="input_textform_asunto input_textform" value="Asunto" onclick="if(this.value=='Asunto') this.value=''" onblur="if(this.value=='') this.value='Asunto'">
					</div>

					<div>
						<textarea type="text" name="mensaje_inp4" class="input_textareaform_mensaj input_textareaform" onclick="if(this.value=='Mensaje') this.value=''" onblur="if(this.value=='') this.value='Mensaje'">Mensaje</textarea>
					</div>
					<br>
					<input type="submit" value="Enviar mis datos" class="btn_fomr">
					</form>
				</div>
			</div>
		</div>
	</div>
<!--Contenedor del formulario-->

<!--Footer-->
	<div id="footer">
		<div id="footer_cente">
			<p>
				
				<img src="img/logofooter.png" alt="img" class="logofooter">
				<a target="_blank" href="http://www.klooid.com">
					Klooid.com dev™
				</a>
				|
				<a target="_blank" href="http://necolas.github.io/normalize.css/">
					Normalize css
				</a>
				|
				<a target="_blank" href="http://css3pie.com/">
					CSS PIE
				</a>
				|
				<a target="_blank" href="http://jquery.com/">
					jQuery
				</a>
				|
				<a target="_blank" href="https://github.com/Klooid">
					Github
				</a>
				|
				<a target="_blank" href="https://www.facebook.com/klooidcr">
					Facebook
				</a>				
				
			</p>
		</div>
	</div>
<!--Footer-->

<script src="js/jquery.min.js"></script>
<script src="js/zelo_validation_rules.js"></script>
</body>
</html>