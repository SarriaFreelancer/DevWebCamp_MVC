<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/eventos">
        <i class="fa-solid fa-circle-arrow-left"></i>
        volver
    </a>
</div>

<div class="dashboard__formulario">
    <?php
    include_once __DIR__ . '/../../templates/alertas.php'
    ?>

    <form name="logoForm" method="POST" action="/admin/eventos/crear"  class="formulario">
        <?php include_once __DIR__ . '/formulario.php'; ?>
        <input id="submitBtn" class="formulario__submit formulario__submit--registrar" type="submit" value="Registrar Evento">
    </form>
</div>