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
            <h1>¡Chiapa de Corzo!</h1>
            <p><img src="vista/img/detalle_paquetes/calendario.png" alt="">Salida / JUEVES</p>
            <p><img src="vista/img/detalle_paquetes/sol.png" alt="">9 DIAS</p>
            <p><img src="vista/img/detalle_paquetes/ubicacion_dos.png" alt="">Visitas / Viena, Budapest, Bratislava, Praga</p>
            <p><img src="vista/img/detalle_paquetes/reloj-de-bolsillo.png" alt="">Vigencia / 2025-10-02</p>
        </div>
        <div class="detalle_contenido_detalle">

            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-01</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">PARQUE NACIONAL CAÑÓN DEL SUMIDERO</h4>
                <p>Recepción en el aeropuerto de Tuxtla Gutiérrez – 
                    visita en el parque nacional Cañón del Sumidero – 
                    visita Chiapa de Corzo – check in en el hotel de San 
                    Cristóbal de las Casas (se recomienda tomar un vuelo matutino).</p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-02</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">LAGOS DE MONTEBELLO</h4>
                <p>Salida a las 08:00 am y regreso aprox. 09:00 pm. 
                    Desayuno en el hotel y comenzamos la visita al centro 
                    Ecoturístico Cascadas el Chiflón - Visita al parque nacional Lagos de Montebello.</p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-03</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt=""> ZONA ARQUEOLÓGICA DE PALENQUE</h4>
                <p>Salida a las 05:00 am y regreso aprox. 10:00 pm. 
                Desayuno en ruta incluida, y comenzamos la vista de 
                las cascadas de Agua Azul. Se visita la cascada de Misol-Há 
                y finalmente a la Zona Arqueológica de Palenque.</p>
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
                        <th>SALIDAS: JUEVES</th>
                        <th>DOBLE</th>
                        <th>TRIPLE</th>
                        <th>SENCILLA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Julio 25 / Septiembre 05, 26, 2024</td>
                        <td>$1,280 PESOS</td>
                        <td>$1,259 PESOS</td>
                        <td>$1,840 PESOS</td>
                    </tr>
                </tbody>
            </table>
            <p>Precios sujetos a cambio y disponibilidad.</p>
        </div>
        <div class="detalle_form_contenido">
            <div class="detalle_form_titulo">
                <h1>RESERVAR PAQUETE</h1>
            </div>
            <form action=""  class="detalle_formulario">
                <div class="detalle_form_campos">
                   
                </div>
                <div class="detalle_form_campos">
                    <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required>
                    <input type="number" name="personas" id="personas" placeholder="No.Personas" required min="1" oninput="calcularTotal()" required>
                </div>
                <div class="detalle_form_campos3">
                    <label for="precioPersona">Precio</label>
                    <input type="number" id="precioPersona" name="precioPersona" value="1250" readonly>
                    <label for="Total">Total</label>
                    <input type="text" id="total" name="total" readonly>
                </div>
                <textarea name="comentarios" id="comentarios" placeholder="Comentarios"></textarea>
                <input type="submit" value="Comprar">
                <input type="hidden" name="r" value="reservar">
            </form>
        </div>
    </article>
<?php require_once('vista/layout/footer.php'); ?>