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
        <h1>¡Cañon del Sumidero!</h1>
        <p><img src="vista/img/detalle_paquetes/calendario.png" alt="">Salida / MARTES</p>
        <p><img src="vista/img/detalle_paquetes/sol.png" alt="">1 DIA</p>
        <p><img src="vista/img/detalle_paquetes/ubicacion_dos.png" alt="">Visitas / Cañon del Sumidero</p>
        <p><img src="vista/img/detalle_paquetes/reloj-de-bolsillo.png" alt="">Comida / Desayuno</p>
    </div>
    <div class="detalle_contenido_detalle">

        <div class="detalle_del_dia">
            <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">PARQUE NACIONAL CAÑÓN DEL SUMIDERO</h4>
                <p>En el recorrido al cañon del sumidero se tiene planeado llevar a cabo un desyuno antes de iniciar el recorrido por 
                    los 6 miradores con los que cuenta esta maravilla natural.</p>
            </div>
        </div>
        <div class="detalle_del_dia">
            <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">RECORRIDOS EN BICICLETA</h4>
                <p>Los recorridos en bicicleta estaran disponibles despues de aver concluido con el recorrido de los miradores.</p>
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
                    <th>SALIDAS: MARTES</th>
                    <th>DOBLE</th>
                    <th>TRIPLE</th>
                    <th>SENCILLA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Agosto 19 /2025</td>
                    <td>$7,000 PESOS</td>
                    <td>$10,500 PESOS</td>
                    <td>$3,500 PESOS</td>
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


        <form action="index.php?r=reservarSumidero" method="POST" class="detalle_formulario" onsubmit="return verificarSesion()">
                <div class="detalle_form_campos" >
                    <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required pattern="[0-9]{10}">
                    <input type="number" name="personas" id="personas" placeholder="No.Personas" required min="1" oninput="calcularTotal()">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>

                </div>
                <div class="detalle_form_campos3">
                    <span>Precio por persona</span>
                    <input type="number" id="precioPersona" name="precioPersona" value="3500" readonly>
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