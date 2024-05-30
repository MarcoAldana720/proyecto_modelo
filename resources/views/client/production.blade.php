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
    <h1>produccion académica</h1>

    <!-- LLAMA EL ARCHIVO DE COLA -->
    @include('client/footer')
</body>
</html>