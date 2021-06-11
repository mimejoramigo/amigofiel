<?
	$destinatario = 'mimejoramigo483@gmail.com'
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];

	$header = "Enviado desde la pagina de MI MEJOR AMIGO";

	mail($destinatario, $nombre, $apellidos, $header);
	echo "<script> alert('Correo enviado exitosamente') </script";
	echo "<script> setTimeout(\"location.href='formularioAdoptar.html'\",1000)</script";
?>