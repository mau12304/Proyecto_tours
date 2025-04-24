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
        <div class="detalle_borde">

        </div>
        <div class="detalle_marco">
            <h1>¡Chiapa de Corzo!</h1>
            <p><img src="vista/img/detalle_paquetes/calendario.png" alt="">Salida / LUNES</p>
            <p><img src="vista/img/detalle_paquetes/sol.png" alt="">3 DIAS 2 NOCHES</p>
            <p><img src="vista/img/detalle_paquetes/ubicacion_dos.png" alt="">Visitas / Rio Grijalva, Tours de Naturaleza, Vida Silvestre</p>
            <p><img src="vista/img/detalle_paquetes/reloj-de-bolsillo.png" alt="">Vigencia / 2025-09-28</p>
        </div>
        <div class="detalle_contenido_detalle">

            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">RECORRIDO EN LANCHA</h4>
                <p>Recepción en el aeropuerto de Tuxtla Gutiérrez – 
                    alojamiento en el hotel Villa Maria – 
                    visita Chiapa de Corzo – Recorrido en lancha por el Rio Grijalva.</p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-02</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">TOURS DE NATURALEZA</h4>
                <p>Salida a las 08:00 am. 
                    Se ofrece el desayuno antes de iniciar la travesia,se visitan 
                    lugares rodeados de naturaleza en los cuales se contara con equipo de acampar si en dado caso 
                    así se desea.</p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-03</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">VIDA SILVESTRE</h4>
                <p>Se plenea dar un recorrido por la vida silvestre, no sin antes comenzar con un ligero desayuno para iniciar la travesia.
                    podran convivir con algunos animales endémicos
                    del lugar, en algunos casos teniendo suerte podran tenerlos frente a frente.
                    .</p>
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
                        <th>SALIDAS: LUNES</th>
                        <th>DOBLE</th>
                        <th>TRIPLE</th>
                        <th>SENCILLA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Abril 15 / 16, 17, 2025</td>
                        <td>$16,000 PESOS</td>
                        <td>$24,000 PESOS</td>
                        <td>$8,000 PESOS</td>
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


            <form action="index.php?r=reservar" method="POST" class="detalle_formulario" onsubmit="return verificarSesion()">
                <div class="detalle_form_campos" >
                    <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required pattern="[0-9]{10}">
                    <input type="number" name="personas" id="personas" placeholder="No.Personas" required min="1" oninput="calcularTotal()">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>

                </div>
                <div class="detalle_form_campos3">
                    <span>Precio por persona</span>
                    <input type="number" id="precioPersona" name="precioPersona" value="8000" readonly>
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