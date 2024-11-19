<?php require_once('vista/layout/header.php'); ?>
<script>
        function calcularTotal() {
            // Obtener el número de pasajeros y el precio por persona
            const numPasajeros = document.getElementById("personas").value;
            const precioPersona = document.getElementById("precioPersona").value;
            
            // Calcular el total
            const total = numPasajeros * precioPersona;
            
            // Mostrar el total en el campo correspondiente
            document.getElementById("total").value = total;
        }
</script>
    <article class="detalle_paquetes">
        <div class="detalle_borde">

        </div>
        <div class="detalle_marco">
            <h1>¡El Arcote!</h1>
            <p><img src="vista/img/detalle_paquetes/calendario.png" alt="">Salida / SABADO</p>
            <p><img src="vista/img/detalle_paquetes/sol.png" alt="">1 DIA 1 NOCHE</p>
            <p><img src="vista/img/detalle_paquetes/ubicacion_dos.png" alt="">Visitas / Viena, Budapest, Bratislava, Praga</p>
            <p><img src="vista/img/detalle_paquetes/reloj-de-bolsillo.png" alt="">Comida / Desayuno y Comida</p>
        </div>
        <div class="detalle_contenido_detalle">

            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">NATACION</h4>
                <p>Hospedaje en el Hotel Encanto Divino– Natacion libre y otras actividades en esta maravilla natural, Asi como el desayuno
                    antes de comenzar el dia.
                   </p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">PASEO EN KAYAK</h4>
                <p>Una de las actividades destacadas es el paseo en Kayak en grupo, los cuales a su vez estan sometidos a un concurso
                    el cual esta lleno de premios y sorpresas.</p>
                </div>
            </div>
           
        </div>
        <div class="detalle_tabla_contenido">
            <div class="detalle_nota">
                <p><em>Precios por persona en <strong>PESOS</strong>:</em></p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>SALIDAS: SABADO</th>
                        <th>DOBLE</th>
                        <th>TRIPLE</th>
                        <th>SENCILLA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Julio 19 / 2025</td>
                        <td>$10,000 PESOS</td>
                        <td>$15,000 PESOS</td>
                        <td>$5,000 PESOS</td>
                    </tr>
                </tbody>
            </table>
            <p>Precios sujetos a cambio y disponibilidad.</p>
        </div>
        <div class="detalle_form_contenido">
            <div class="detalle_form_titulo">
                <h1>RESERVAR PAQUETE</h1>
            </div>


                <?php if (isset($_GET['error'])): ?>
                <p class="error-msg"><?php echo htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>

                <?php if (isset($_GET['success'])): ?>
                <p class="success-msg"><?php echo htmlspecialchars($_GET['success'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>


            <form action=""  class="detalle_formulario" onsubmit="return verificarSesion()">
                <div class="detalle_form_campos">
                   
                </div>
                <div class="detalle_form_campos" >
                    <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required>
                    <input type="number" name="personas" id="personas" placeholder="No.Personas" required min="1" oninput="calcularTotal()" required>
                </div>
                <div class="detalle_form_campos3">
                    <label for="precioPersona">Precio</label>
                    <input type="number" id="precioPersona" name="precioPersona" value="5000" readonly>
                    <label for="Total">Total</label>
                    <input type="text" id="total" name="total" readonly>
                </div>
                <textarea name="comentarios" id="comentarios" placeholder="Comentarios"></textarea>
                <input type="submit" value="Comprar">
                <input type="hidden" name="r" value="reservarArcote">
            </form>
        </div>
        <script>
            // Verificar la sesión antes de enviar el formulario
            function verificarSesion() {
                const loggedIn = <?php echo json_encode(isset($_SESSION['id_user_client'])); ?>;
                if (!loggedIn) {
                    alert('Debe registrarse y iniciar sesión antes de realizar la compra.');
                    return false; // Detener el envío del formulario
                }
                return true; // Permitir el envío
            }
            // Mostrar mensaje de éxito si se encuentra el parámetro 'success' en la URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success')) {
                alert(urlParams.get('success')); // Muestra el mensaje de éxito en un cuadro emergente
            }
        </script>
    </article>
<?php require_once('vista/layout/footer.php'); ?>