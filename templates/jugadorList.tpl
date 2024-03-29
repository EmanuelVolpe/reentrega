{include 'templates/header.tpl'}

<div class="container">

    <h1 class="text-white font-weight-bold">{$titulo}</h1>

    {if isset($isAdmin) && $isAdmin==1}
    <form class="text-white font-weight-bold" action="nuevoJugador" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Posicion</label>
                    <select name="posicion" class="form-control">
                        <option value="arquero">Arquero</option>
                        <option value="defensor">Defensor</option>
                        <option value="volante">Volante</option>
                        <option value="delantero">Delantero</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Nombre del equipo</label>
                    <select name="id_equipo" class="form-control">
                        {foreach $equipos as $equipo}
                        <option value="{$equipo->id_equipo}">{$equipo->nombre}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 form-group">
                <input class="btn btn-warning" type="file" name="input_name" id="imageToUpload">
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary">Guardar Jugador</button>
            </div>
        </div>
    </form>
    {/if}

    <br>

    <table class="table table-striped table-bordered font-weight-bold">
        <thead class="thead-dark">
            <tr>
                <th class="text-center" scope="col">ID Jugador</th>
                <th class="text-center" scope="col">Nombre Del Jugador</th>
                <th class="text-center" scope="col">Posicion</th>
                <th class="text-center" scope="col">Nombre del Equipo</th>
                <th class="text-center" scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            {foreach $jugadores as $jugador}
                <tr>
                    <td class="text-center">{$jugador->id_jugador}</td>
                    <td class="text-center">{$jugador->nombreJugador}</td>
                    <td class="text-center">{$jugador->posicion}</td>
                    <td class="text-center">{$jugador->nombreEquipo}</td>
                    <td class="text-center"><a href='verJugador/{$jugador->id_jugador}'><button type="button" class="btn btn-info">Ver Detalle</button></a>
                        {if isset($isAdmin) && $isAdmin==1}
                            <a href='editarJugador/{$jugador->id_jugador}'><button type="button" class="btn btn-success">Editar</button>
                            <a href='eliminarJugador/{$jugador->id_jugador}'><button type="button" class="btn btn-danger">Borrar</button></a>
                        {/if}
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include 'templates/footer.tpl'}