<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inicia sesion en DevWebcamp </p>

    <?php  
        require_once  __DIR__ . '/../templates/alertas.php';
    ?>

    <form name='logoForm' method="POST" action="/login" class="formulario">
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
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input 
            type="password"
            class="formulario__input"
            placeholder="Tu password"
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

        <input type="submit" id="submitBtn" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aún no tienes una cuenta? Obten una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu Password?</p>
    </div>
</main>

