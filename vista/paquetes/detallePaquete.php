<?php require_once('vista/layout/header.php'); ?>
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
                <h3>Día-1 Lunes</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">PARQUE NACIONAL CAÑÓN DEL SUMIDERO</h4>
                <p>Recepción en el aeropuerto de Tuxtla Gutiérrez – 
                    visita en el parque nacional Cañón del Sumidero – 
                    visita Chiapa de Corzo – check in en el hotel de San 
                    Cristóbal de las Casas (se recomienda tomar un vuelo matutino).</p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-1 Lunes</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt="">PARQUE NACIONAL CAÑÓN DEL SUMIDERO</h4>
                <p>Recepción en el aeropuerto de Tuxtla Gutiérrez – 
                    visita en el parque nacional Cañón del Sumidero – 
                    visita Chiapa de Corzo – check in en el hotel de San 
                    Cristóbal de las Casas (se recomienda tomar un vuelo matutino).</p>
                </div>
            </div>
            <div class="detalle_del_dia">
                <div class="detalle_dia">
                <h3>Día-1 Lunes</h3>
                <h4><img src="vista/img/detalle_paquetes/ubicacion.png" alt=""> PARQUE NACIONAL CAÑÓN DEL SUMIDERO</h4>
                <p>Recepción en el aeropuerto de Tuxtla Gutiérrez – 
                    visita en el parque nacional Cañón del Sumidero – 
                    visita Chiapa de Corzo – check in en el hotel de San 
                    Cristóbal de las Casas (se recomienda tomar un vuelo matutino).</p>
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
            <form action="process_reservation.php" method="post" class="detalle_formulario">
                <div class="detalle_form_campos">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="email" name="correo" placeholder="Correo Electrónico" required>
                </div>
                <div class="detalle_form_campos">
                    <input type="tel" name="telefono" placeholder="Teléfono" required>
                    <input type="number" name="adultos" placeholder="Adultos" required min="1">
                    <input type="number" name="menores" placeholder="Menores" min="0">
                </div>
                <textarea name="comentarios" placeholder="Comentarios"></textarea>
                <button type="submit">ENVIAR</button>
            </form>
        </div>
    </article>
<?php require_once('vista/layout/footer.php'); ?>