<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{$baseURL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/comentarios.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>{$titulo}</title>
</head>

<body>

    {if isset($isAdmin) && ($isAdmin==1) && isset($userName)}
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-4">
        <a class="navbar-brand" href="verEquipos">TP ESPECIAL 2° PARTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verEquipos">Equipos</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verJugadores">Jugadores</a>
            </div>

            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verUsuarios">Usuarios</a>
            </div>
            <div class="navbar-nav ml-auto">
                <span class="navbar-text">USUARIO ADMINISTRADOR: {$userName}</span>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="logout">LOGOUT</a>
            </div>
        </div>
    </nav>
    {elseif isset($userName) && isset($isAdmin) && ($isAdmin!=1)}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">
        <a class="navbar-brand" href="verEquipos">TP ESPECIAL 2° PARTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verEquipos">Equipos</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="verJugadores">Jugadores</a>
            </div>
            <div class="navbar-nav ml-auto">
                <span class="navbar-text">USUARIO NORMAL: {$userName}</span>
            </div>
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="logout">LOGOUT</a>
            </div>
        </div>
    </nav>
    {/if}