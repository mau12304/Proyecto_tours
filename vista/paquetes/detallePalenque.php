<?php require_once('vista/layout/header.php'); ?>
<script>
        function calcularTotal() {
            // Obtener el número de pasajeros y el precio por persona
            const numPasajeros = document.getElementById("personas").value;
            const precioPersona = document.getElementById("precioPersona").value;
            
            // Calcular el total
            const Subtotal = ((numPasajeros * precioPersona) * 50) / 100;
            const total = numPasajeros * precioPersona;
            
            // Mostrar el total en el campo correspondiente
            document.getElementById("Subtotal").value = "$" + Subtotal;
            document.getElementById("total").value =  "$" + total ;
        }
</script>
    <article class="detalle_paquetes">
            <div class="detalle_bloque">
            <div class="detalle_borde"></div>
            <div class="detalle_marco">
                <h1>¡Palenque!</h1>
                <p>🕑 Salida / LUNES</p>
                <p>🌞 3 DÍAS 2 NOCHES</p>
                <p>🌿 Visitas / Río Grijalva, Tours de Naturaleza, Vida Silvestre</p>
                <p>📅 Vigencia / 2025-09-28</p>
            </div>
            </div>

        <div class="detalle_contenido_detalle">

            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">ZONA ARQUEOLOGICA DE PALENQUE</h4>
                <p>Recepción en el aeropuerto de Tuxtla Gutiérrez – 
                    alojamiento en el Hotel Cabañas Kin Balam – 
                    visita a la zona arqueologica de palenque.</p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-02-03</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">CAMINATA POR LA SELVA Y RECORRIDO ALUXES</h4>
                <p>En el dia se inica con un desayuno en el Hotel, posterior a eso se tiene planeado comenzar el recorrido por toda la selva,
                    teniendo oportunidad de poder acampar y realizar actividades de campo. Para el dia 03 se finalizara con un recorrido por 
                    Aluxes: Un recorrido el cual tiene la similitud con un Zoológico por lo que se podran ver especies animales endemicas del estado de Chiapas.

                </p>
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
                        <th>SALIDAS: MIERCOLES</th>
                        <th>DOBLE</th>
                        <th>TRIPLE</th>
                        <th>SENCILLA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Agosto 20 / 21, 22, 2025</td>
                        <td>$18,200 PESOS</td>
                        <td>$27,300 PESOS</td>
                        <td>$9,100 PESOS</td>
                    </tr>
                </tbody>
            </table>
            <p>Precios sujetos a cambio y disponibilidad.</p>
        </div>
        <div class="detalle_form_contenido">
            <div class="detalle_form_titulo">
                <h1>RESERVAR PAQUETE</h1>
            </div>
            <form action="index.php?r=reservarPalenque" method="POST" class="detalle_formulario" onsubmit="return verificarSesion()">
                <div class="detalle_form_campos" >
                    <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required pattern="[0-9]{10}">
                    <input type="number" name="personas" id="personas" placeholder="No.Personas" required min="1" oninput="calcularTotal()">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>

                </div>
                <div class="detalle_form_campos3">
                    <span>Precio por persona</span>
                    <input type="number" id="precioPersona" name="precioPersona" value="100" readonly>
                    <input type="text" id="Subtotal" name="Subtotal" placeholder="Subtotal" readonly>
                </div>
                    <input type="text" name="total" id="total" placeholder="Total" readonly>
                    <input type="email" name="correo" id="correo" placeholder="Correo" required>
                    <textarea name="comentarios" id="comentarios" placeholder="Comentarios"></textarea>
                    <button type="submit" class="ini">Reservar</button>
            </form>
        </div>
        <script>
            // Verificar la sesión antes de enviar el formulario
            function verificarSesion() {
                const loggedIn = <?php echo json_encode(isset($_SESSION['id_user_client'])); ?>;
                if (!loggedIn) {
                    alert('Debe registrarse y iniciar sesión antes de realizar la Reserva.');
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