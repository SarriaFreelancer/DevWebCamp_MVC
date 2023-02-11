<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<main class="bloques">
    <div class="bloques__grid">
        <div class="bloqueG">
            <h3 class="bloqueG__heading">Últimos Registros</h3>

            <?php foreach ($registros as $registro ) { ?>
                <div class="bloqueG__contenido">
                    <p class="bloqueG__texto">
                        <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
        <div class="bloqueG">
            <h3 class="bloqueG__heading">Primeros Registros</h3>

            <?php foreach ($pregistros as $pregistro ) { ?>
                <div class="bloqueG__contenido">
                    <p class="bloqueG__texto">
                        <?php echo $pregistro->usuario->nombre . " " . $pregistro->usuario->apellido; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
        
        <div id="condicion" class="bloqueG">
            <h3 class="bloqueG__heading">Ingresos Totales</h3>
            <p id="ingresos" class="bloqueG__texto--cantidad"><?php echo $ingresos ?></p>
            <h3 class="bloqueG__heading">Meta del Mes</h3>
            <p id="meta" class="bloqueG__texto--cantidad"><?php echo $metaIngresos ?></p>
        </div>

        <div class="bloqueG">
            <h3 class="bloqueG__heading">Usuarios Registrados en los eventos</h3>
            <p id="ingresos" class="bloqueG__texto--cantidad-total"><?php echo $totalUsuarios ?></p>
            
        </div>
        <div class="bloqueG">
            <h3 class="bloqueG__heading">Total Usuarios en el Sistema</h3>
            <p id="ingresos" class="bloqueG__texto--cantidad-total"><?php echo $confirmados ?></p>
            
        </div>
        

        <div class="bloqueG">
            <h3 class="bloqueG__heading">Eventos Con Menos Lugares Disponibles</h3>
            <?php foreach ($menos_disponibles as $evento) { ?>
                <div class="bloqueG__contenido">
                    <p class="bloqueG__texto">
                        <?php echo $evento->nombre . " - " . $evento->disponibles . ' Disponibles'; ?>
                    </p>
                </div>
            <?php } ?>
        </div>

        <div class="bloqueG">
            <h3 class="bloqueG__heading">Eventos Con Más Lugares Disponibles</h3>
            <?php foreach ($mas_disponibles as $evento) { ?>
                <div class="bloqueG__contenido">
                    <p class="bloqueG__texto">
                        <?php echo $evento->nombre . " - " . $evento->disponibles . ' Disponibles'; ?>
                    </p>
                </div>
            <?php } ?>
        </div>

        <div class="bloqueG bloqueBoletos">
        <h3 class="bloqueG__heading">Boletos Vendidos y Total</h3>
            <div class="bloqueBoletos__pase">
                <div class="bloqueBoletos__pase--tipo">
                    <h3 class="bloqueBoletos__pase--titulo">Virtuales</h3>
                    <p class="bloqueBoletos__pase--cantidad">$<?php echo $virtualesT ?></p>
                </div>
                
                <div class="bloqueBoletos__pase--tipo">
                    <h3 class="bloqueBoletos__pase--titulo">Vendidos</h3>
                    <p class="bloqueBoletos__pase--cantidad"><?php echo $virtuales ?></p>
                </div>
                
                
            </div>

            <div class="bloqueBoletos__pase">
                <div class="bloqueBoletos__pase--tipo">
                    <h3 class="bloqueBoletos__pase--titulo">Presenciales</h3>
                    <p class="bloqueBoletos__pase--cantidad">$<?php echo $presencialesT ?></p>
                </div>
                <div class="bloqueBoletos__pase--tipo">
                    <h3 class="bloqueBoletos__pase--titulo">Vendidos</h3>
                    <p class="bloqueBoletos__pase--cantidad"><?php echo $presenciales ?></p>
                </div>
            </div>
            
        </div>
        
        <div class="bloqueG">
                <h3 class="bloqueG__heading">Gráfica de Regalos</h3>
                <div class="dashboard__grafica">
                    <canvas id="regalos-grafica" width="auto" height="200"></canvas>
                </div>
        </div>

        <div class="bloqueG">
                <h3 class="bloqueG__heading">Gráfica de Eventos Disponibles</h3>
                <div class="dashboard__grafica">
                    <canvas id="grafica-disponibles" width="auto" height="250"></canvas>
                </div>
        </div>

        <div class="bloqueG">
        <h3 class="bloqueG__heading">Asistentes Registrados</h3>
        <div class="dashboard__contenedor">
            <?php if(!empty($registrosd)){ ?>
                
                <table class="table">
                    <thead class="table__thead">
                        <tr>
                            <th scope="col" class="table__th">Nombre</th>
                            <th scope="col" class="table__th">Email</th>
                            <th scope="col" class="table__th">Paquete</th>
                        </tr>
                    </thead>

                    <tbody class="table__tbody">
                        <?php foreach($registrosd as $registro) { ?>
                            <tr class="table__tr">
                                <td class="table__td">
                                    <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                                </td>
                                <td class="table__td">
                                    <?php echo $registro->usuario->email; ?>
                                </td>
                                <td class="table__td">
                                    <?php echo $registro->paquete->nombre; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <!---------------------------------------------------------------->

            <?php } else { ?> 
                <a class="text-center" href="#">No Hay Registrados Aún</a>
            <?php } ?>
        </div>

        <?php
            echo $paginacion;
        ?>
        </div>
        <div class="bloqueG">
                <h3 class="bloqueG__heading">Registros Confirmados por fecha</h3>
                <div class="dashboard__grafica">
                    <canvas id="grafica-usuarios" width="auto" height="250"></canvas>
                </div>
        </div>
        

    </div>
    
    
</main>


