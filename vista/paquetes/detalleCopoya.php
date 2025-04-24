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
            <h1>¡Cristo de Copoya!</h1>
            <p><img src="vista/img/detalle_paquetes/calendario.png" alt="">Salida / LUNES</p>
            <p><img src="vista/img/detalle_paquetes/sol.png" alt="">1 DIA 1 NOCHE</p>
            <p><img src="vista/img/detalle_paquetes/ubicacion_dos.png" alt="">Visitas / Recorrido por el Cristo de Copoya</p>
            <p><img src="vista/img/detalle_paquetes/reloj-de-bolsillo.png" alt="">Comida / No incluye</p>
        </div>
        <div class="detalle_contenido_detalle">

            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">MIRADOR CRISTO DE COPOYA</h4>
                <p>Hospedaje en el Hotel Las 2 Montañas – 
                   Se contempla apreciar el gran mirador del cristo de copoya asi como aprsiar las hermosa vista de la ciudad
                   ademas de atracciones dentro del municipio de copoya, comida, juegos etc.</p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">Copoya</h4>
                <p>En este bello municio podra sumergirse en las maravillosas costumbres del municipio, una de ellas que no puede saltarse
                    son los platillos tipicos.</p>
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
                        <th>SALIDAS: Lunes</th>
                        <th>DOBLE</th>
                        <th>TRIPLE</th>
                        <th>SENCILLA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Julio 07 /2025</td>
                        <td>$5,800 PESOS</td>
                        <td>$8,700 PESOS</td>
                        <td>$2,900 PESOS</td>
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


            <form action="index.php?r=reservarCopoya" method="POST" class="detalle_formulario" onsubmit="return verificarSesion()">
                <div class="detalle_form_campos" >
                    <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required pattern="[0-9]{10}">
                    <input type="number" name="personas" id="personas" placeholder="No.Personas" required min="1" oninput="calcularTotal()">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>

                </div>
                <div class="detalle_form_campos3">
                    <span>Precio por persona</span>
                    <input type="number" id="precioPersona" name="precioPersona" value="2900" readonly>
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