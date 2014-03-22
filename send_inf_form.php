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
<?php

$name_inp1 = $_POST['name_inp1'];
$mail_inp2 = $_POST['mail_inp2'];
$asunto_inp3 = $_POST['asunto_inp3'];
$mensaje_inp4 = $_POST['mensaje_inp4'];

$option = isset($_POST['provincia_select_8']) ? $_POST['provincia_select_8'] : false;

$mailsend = mail ('fufales@gmail.com','Contacto ZeloForm',"
	Por: $name_inp1\r\n
	E-Mail: $mail_inp2\r\n
	Asunto: $asunto_inp3\r\n
	Dice: $mensaje_inp4\r\n" );

if ($mailsend) {
	echo '
<div id="cont_form">
	<div id="cont_form_int">
		<div id="cont_form_int_con">
			<div id="cont_form_int_con_con">
				<h2>
					<strong>Z</strong>elo<i>Form</i>
				</h2>

				<p class="grac_css_form">
				Gracias, su mensaje fue enviado con exito!
				</p>

			</div>
		</div>
	</div>
</div>
	';
	}
	
	else {
		echo '
<div id="cont_form">
	<div id="cont_form_int">
		<div id="cont_form_int_con">
			<div id="cont_form_int_con_con">
				<h2>
					<strong>Z</strong>elo<i>Form</i>
				</h2>

				<p class="grac_css_form">
				UPS, algo esta mal!
				</p>

			</div>
		</div>
	</div>
</div>
		';
		}
?>

</body>
</html>