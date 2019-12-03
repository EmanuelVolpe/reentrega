{include 'templates/header.tpl'}

<div class="container">

        <h1 class="text-white font-weight-bold">{$titulo|upper}</h1>

        <h1 class="text-white font-weight-bold">Nombre del Equipo: {$equipo->nombre}</h1>
        <h1 class="text-white font-weight-bold">Pais: {$equipo->pais}</h1>
        <h1 class="text-white font-weight-bold">Cantidad de Titulos: {$equipo->cantidad_titulos}</h1>
        <h1 class="text-white font-weight-bold">Jugadores:</h1>
                <table class="table table-striped table-bordered font-weight-bold">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center" scope="col">Nombre de los Jugadores</th>
                            <th class="text-center" scope="col">Posicion</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-center">
                        {foreach $jugadoresDelEquipo as $equipo}
                            <tr>
                                <td>{$equipo->jugador}</td> <td class="text-center">{$equipo->posicion}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>

        <a href='verEquipos'><button type="button" class="btn btn-info">Volver</button></a>
</div>

{include 'templates/footer.tpl'}
