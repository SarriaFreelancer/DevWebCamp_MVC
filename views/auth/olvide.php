<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebcamp </p>

    <?php  
        require_once  __DIR__ . '/../templates/alertas.php';
    ?>


    <form action="/olvide" name="logoForm" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
            type="email"
            class="formulario__input"
            placeholder="Tu Email"
            id="email"
            name="email"
            >
        </div>
        <div class=" formulario__campo">
            <label for="captcha" class="formulario__label">ReCaptcha</label>
            
            <div class="formulario__campo--captcha">
                <div id="captchaValor"></div>
                <input 
                type="captcha"
                class="formulario__input formulario__input--captcha"
                placeholder="Escribe el código"
                id="inputCaptcha"
                name="captcha"
                >
            </div>
           
        </div>

        <input type="submit" id="submitBtn" class="formulario__submit" value="Enviar Instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace"">¿Aún no tienes una cuenta? Obten una</a>
    </div>
</main>