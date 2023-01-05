<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio de sesión: nombre_negocio</title>
    <link rel="stylesheet" href="public/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="form">
        <h1>Inicio de sesión</h1>
        <form action="login/authenticate" method="post">
            <div class="input-form-login">
                <input type="text" name="user" id="user" required>
                <label for="user">Email o No. documento</label>
            </div>
            <div class="input-form-login">
                <input type="password" name="password" id="password" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="reminde">¿Ovido su contraseña?</div>
            <input type="submit" value="Iniciar sesion">
            <div class="have-account">
                ¿No tienes una cuenta? <a href="signup">Registrate</a>
            </div>
        </form>
    </div>
    
    <script src="public/js/login.js"></script>
</body>
</html>