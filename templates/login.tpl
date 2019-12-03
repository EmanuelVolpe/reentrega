<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{$baseURL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>{$titulo}</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark"></nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger"></nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark"></nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent"></nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-4 mx-auto bg-secondary">
                    <form class="text-left" action="verifyUser" method="POST" class="col-md-4 offset-md-4 mt-4">
                        <h1 class="text-left font-weight-bold">{$titulo}</h1>

                        <div class="form-group font-weight-bold">
                            <label>Usuario (email)</label>
                            <input type="email" name="username" class="form-control" placeholder="Ingrese email">
                        </div>

                        <div class="form-group font-weight-bold">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>

                        {if $error}
                            <div class="alert alert-danger" role="alert">
                                {$error}
                            </div>
                        {/if}

                        <button type="submit" class="btn btn-primary font-weight-bold">Ingresar</button>
                    </form>
                </div>
                <div class="col-6">
                    {if !isset($isAdmin)}
                        <a href='registro'><button type="button" class="btn btn-success btn-lg">REGISTRARME!!!!</button></a>
                    {/if}
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <h1 class="text-uppercase text-white font-weight-bold">lista de equipos</h1>
            <table class="table table-striped table-bordered font-weight-bold text-center">
                <thead class="thead-dark"> 
                    <tr>
                        <th scope="col">ID Equipo</th>
                        <th scope="col">Nombre Del Equipo</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Cantidad de Titulos</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    {foreach $equipos as $equipo}
                        <tr>
                            <td>{$equipo->id_equipo}</td>
                            <td>{$equipo->nombre}</td>
                            <td>{$equipo->pais}</td>
                            <td>{$equipo->cantidad_titulos}</td>
                            <td><a href='verEquipo/{$equipo->id_equipo}'><button type="button" class="btn btn-info">Ver Detalle</button></a></td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
     
        <br>

        <div class="container">
            <h1 class="text-uppercase text-white font-weight-bold">lista de jugadores</h1>
            <table class="table table-striped table-bordered font-weight-bold text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Jugador</th>
                        <th scope="col">Nombre Del Jugador</th>
                        <th scope="col">Posicion</th>
                        <th scope="col">Nombre del Equipo</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    {foreach $jugadores as $jugador}
                        <tr>
                            <td>{$jugador->id_jugador}</td>
                            <td>{$jugador->nombreJugador}</td>
                            <td>{$jugador->posicion}</td>
                            <td>{$jugador->nombreEquipo}</td>
                            <td><a href='verJugador/{$jugador->id_jugador}'><button type="button" class="btn btn-info">Ver Detalle</button></a></td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>