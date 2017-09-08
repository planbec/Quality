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
