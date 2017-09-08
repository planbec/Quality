<?php
/* Recibe los datos ingresados */
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$comentario = $_POST['mensaje'];

if( empty($nombre) || empty($email) || empty($asunto) || empty($comentario) ) {
	$error = true;
}


/* Aquí debes ingresar el asunto del mail */
$subject = 'Contacto desde internet de ' . $nombre ;
$comentario = stripcslashes($comentario);


/* Aquí se genera el cuerpo del mensaje */
$mensaje = "De: $nombre \n
E-mail: $email \n
Asunto: $asunto \n
Mensaje: $comentario \n
\n";

$from = "From: $email\r\n";

/* ingresa mail receptor */

if( !$error ) {
	mail("davichotk@gmail.com", $subject, $mensaje, $from);
}
?>

<div class="citas">
        <form id="formulario" action="citas-new-envio.php" method="post">
            <h2>Agenda tu cita</h2>
            <p><input type="text" id="nombredeusuario" name="nombredeusuario" placeholder="Nombre" required></p>
            <p><input type="email" id="correoelectronico" name="correoelectronico" placeholder="email" required></p>
            <p><input type="text" id="telefono" name="telefono" placeholder="Teléfono" required></p>
            <p><select name="doctor" required>
          <option value="">Doctor...</option>
          <option value="Dr-Mauricio-Riofrio">Dr. Mauricio Riofrio Riofrio</option>
          <option value="Dr-Carlos-Freire">Dr. Carlos Freire Alprecht</option>
          <option value="Dr-Renee-Alvarado">Dr. Reneé Alvarado</option>
          <option value="Dra-Ericka-Serrano">Dra. Ericka Judith Serrano</option>
        </select></p>
            <p><input type="date" id="dia" name="dia" placeholder="Día" required></p>
            <input type="submit" value="Enviar" class="btn-form">
        </form>
</div>


<?php } else { ?>

	<p>Gracias por contactarte con nosotros, responderremos lo más pronto posible :)</p>

<?php } ?>
	