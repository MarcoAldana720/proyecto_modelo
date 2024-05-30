<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad Modelo</title>
    <link rel="icon" href="{{ asset('img/logo2.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/228ea9976a.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- LLAMA EL ARCHIVO DE CABEZA -->
    <nav class="menu">
        <section class="menu__container">
            <img src="{{ asset('img/logo-blanco.svg') }}" alt="Logo" width=180px>
        </section>
    </nav>

    <!-- CONTENIDO DE LOGIN -->
    <div class="container-login">
        <form action="" method="POST" class="container-center">
            <div class="container-img">
                <img src="{{ asset('img/logo2.png') }}" alt="">
            </div>
            <label for="usuario">usuario</label>
            <br>
            <input type="text" id="usuario" nombre="usuario" placeholder="Usuario">
            <br><br>
            <label for="contrasena">contraseña</label>
            <br>
            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
            <br><br>
            <button type="submit">iniciar sesion</button>
            <br><br>
            <div class="container-google">
                <img src="{{ asset('img/google.png') }}" alt="Google">
                <a href="">usar google</a>
            </div>
        </form>
    </div>

    <!-- LLAMA EL ARCHIVO DE COLA -->
    <div class="container-footer">
        <p>	&copy; Todos los Derechos Reservados, Universidad Modelo</p>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>