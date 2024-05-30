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
    @include('client/header')

    <!-- CONTENIDO -->
    <div class="container-table">
        <h1>IDENTIFICACION DEL PROFESOR</h1>
        <hr>
        <p>Bienvenido a la sección de Identificación de Profesor. Aquí podrás registrarte y verificar tu identidad como docente para acceder a todos los recursos y herramientas.</p>
        <br>
        <table class="table">
            <thead>
                <th>Clave Única de Registro de Población (CURP)</th>
                <th>Registro Federal de Contribuyentes (RFC)</th>
                <th>Nombre(s)</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Genero</th>
                <th>Fecha De Nacimiento</th>
                <th>Nacionalidad</th>
                <th>Lugar De Nacimiento</th>
                <th>Estado Civil</th>
                <th>Telefono (Trabajo)</th>
                <th>Telefono (Casa)</th>
                <th>Correo Electronico</th>
                <th>Correo Adicional</th>
                <th>Area A Al Que Se Dedica</th>
                <th>Disiplina A LA Que Se Dedica</th>
            </thead>
            <tbody>
                <tr>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                    <td>aaaaaaaaa</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- LLAMA EL ARCHIVO DE COLA -->
    @include('client/footer')
</body>
</html>