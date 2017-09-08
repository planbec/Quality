<div class="citas">
        <form id="formulario" action="enviar_cita.php" method="post">
            <h2>Agenda tu cita</h2>
            <div class="control-group">
                <div class="controls">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" data-validation="required" />
                </div>
            </div>
            <p><input type="text" id="nombredeusuario" name="nombredeusuario" placeholder="Nombre" data-validation="required"></p>
            <p><input type="text" id="correoelectronico" name="correoelectronico" placeholder="email" data-validation="required, email"></p>
            <p><input type="text" id="telefono" name="telefono" placeholder="Teléfono" data-validation="required"></p>
            <p><select name="doctor" data-validation="required">
          <option value="">Doctor...</option>
          <option value="Dr-Mauricio-Riofrio">Dr. Mauricio Riofrio Riofrio</option>
          <option value="Dr-Carlos-Freire">Dr. Carlos Freire Alprecht</option>
          <option value="Dr-Renee-Alvarado">Dr. Reneé Alvarado</option>
          <option value="Dra-Ericka-Serrano">Dra. Ericka Judith Serrano</option>
        </select></p>
            <p><input type="date" id="dia" name="dia" placeholder="Día" data-validation="required"></p>
            <input type="submit" value="Enviar" class="btn-form">
        </form>
</div>
	<script>
	    $(document).ready(function () {
	        $.validate({ lang: 'es', onError: function () { }, onSuccess: function () { } });
	    });
	</script>