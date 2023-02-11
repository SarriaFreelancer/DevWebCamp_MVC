<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Coloca tu nuevo password</p>

    <?php  
        require_once  __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if($token_valido) { ?>
    <form method="POST" name="logoForm" class="formulario">
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Nuevo Password</label>
            <input 
            type="password"
            class="formulario__input"
            placeholder="Tu Nuevo Password"
            id="password"
            name="password"
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

        <input type="submit" id="submitBtn" class="formulario__submit" value="Guardar Password">
    </form>
    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta? Iniciar Sesión</a>
        <a href="/registro" class="acciones__enlace"">¿Aún no tienes una cuenta? Obten una</a>
    </div>
</main>