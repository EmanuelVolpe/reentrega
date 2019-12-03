{include 'templates/header.tpl'}
    <div class="container">
        <h1 class="text-white font-weight-bold">{$titulo}</h1>

    {if isset($isAdmin) && $isAdmin==1}
        <form class="text-white font-weight-bold" action="nuevoEquipo" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pais</label>
                        <input name="pais" type="text" class="form-control" placeholder="Pais">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Cantidad de Titulos</label>
                        <input name="cantidadTitulos" type="text" class="form-control" placeholder="Cantidad de Titulos">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Equipo</button>
        </form>
    {/if}

        <br>

        <table class="table table-striped table-bordered font-weight-bold">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID Equipo</th>
                    <th class="text-center" scope="col">Nombre Del Equipo</th>
                    <th class="text-center" scope="col">Pais</th>
                    <th class="text-center" scope="col">Cantidad de Titulos</th>
                    <th class="text-center" scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                {foreach $equipos as $equipo}
                    <tr>
                        <td class="text-center">{$equipo->id_equipo}</td> 
                        <td class="text-center">{$equipo->nombre}</td> 
                        <td class="text-center">{$equipo->pais}</td> 
                        <td class="text-center">{$equipo->cantidad_titulos}</td> 
                        <td class="text-center"><a href='verEquipo/{$equipo->id_equipo}'><button type="button" class="btn btn-info">Ver Detalle</button></a>
                            {if isset($isAdmin) && $isAdmin==1}
                                <a href='editarEquipo/{$equipo->id_equipo}'><button type="button" class="btn btn-success">Editar</button></a>     
                                <a href='eliminarEquipo/{$equipo->id_equipo}'><button type="button" class="btn btn-danger">Borrar</button></a>
                            {/if}</td>  
                    </tr>
                {/foreach}
            </tbody>
        </table>
        
    </div>
{include 'templates/footer.tpl'}