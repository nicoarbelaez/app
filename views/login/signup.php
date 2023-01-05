<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse: nombre_negocio</title>
    <link rel="stylesheet" href="public/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="form">
        <h1>Registrarse</h1>

        <form action="signup/newuser" method="POST">
            <div class="group-input">
                <div class="input-form-login group-input-items">
                    <input type="text" name="name" id="name" required>
                    <label for="name">Nombres</label>
                </div>
                <div class="input-form-login group-input-items">
                    <input type="text" name="lastname" id="lastname" required>
                    <label for="lastname">Apellidos</label>
                </div>
            </div>
            <div>
                
            </div>
            <div class="input-form-login">
                <input type="text" name="email" id="email" required>
                <label for="email">Correo electrónico</label>
            </div>
            <div class="input-form-login">
                <select name="type-document" id="type-document" required>
                    <option value="">Tipo:</option>
                    <option value="CC">CC</option>
                    <option value="TI">TI</option>
                </select>
                <input type="text" name="document" id="document" required>
                <label for="document">Numero de documento</label>
            </div>
            <div class="input-form-login">
                <input type="text" name="phone" id="phone" required>
                <label for="phone">Teléfono</label>
            </div>

            <div class="input-form-login">
                <input type="password" name="password" id="password" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="input-form-login">
                <input type="password" name="confirm-password" id="confirm-password" required>
                <label for="confirm-password">Confirmar contraseña</label>
            </div>
            <input type="submit" value="Registrarse">
            <div class="have-account">
                ¿Ya tienes una cuenta? <a href="login">Iniciar sesión</a>
            </div>
        </form>
    </div>
    <script src="public/js/login.js"></script>
</body>
</html>