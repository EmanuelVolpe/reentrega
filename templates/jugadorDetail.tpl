{include 'templates/header.tpl'}

<div class="container">

    <h1>{$titulo|upper}</h1>

    <div class="container-fluid">
        <h1>Nombre del Jugador: {$jugador->jugador}</h1>
        <h1>Posicion del Jugador: {$jugador->posicion}</h1>
        <h1>Equipo del Jugador: {$jugador->nombreEquipo}</h1>
        <h1>ID del Jugador: {$jugador->id_jugador}</h1>
        {if isset($jugador->imagen)}
            <img src="{$jugador->imagen}" class="img-fluid rounded border border-success" />
        {/if}
    </div>
    <div class="container-fluid">
        <h1></h1>
    </div>

    {if isset($isAdmin) && ($isAdmin==1)}
        <form id="formComentario">
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <label class="lead font-weight-bold" for="exampleFormControlTextarea1">Ingrese Comentario</label>
                        <textarea class="form-control" id="comentario" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="lead font-weight-bold" for="exampleFormControlSelect1">Puntuar Comentario</label>
                        <select class="form-control" id="puntaje">
                            <option value="1"> 1 - Malo </option>
                            <option value="2"> 2 - Regular </option>
                            <option value="3"> 3 - Bueno </option>
                            <option value="4"> 4 - Muy Bueno </option>
                            <option value="5"> 5 - Excelente </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="submit" class="btn btn-success font-weight-bold" id="enviaComentario">Enviar
                        Comentario</button>
                </div>
            </div>
            <div class="container-fluid">
                <h1></h1>
            </div>
            <div class="container-fluid">
                <h1></h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        ID JUGADOR<input id="id_jugador" class="form-control" value="{$jugador->id_jugador}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        ID USUARIO<input id="id_usuario" class="form-control" value="{$userID}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        USUARIO ADMIN<input id="isAdmin" class="form-control" value="{$isAdmin}">
                    </div>
                </div>
            </div>
        </form>
    {elseif isset($isAdmin) && ($isAdmin==0)}
       <form id="formComentario">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        ID JUGADOR<input id="id_jugador" class="form-control" value="{$jugador->id_jugador}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        ID USUARIO<input id="id_usuario" class="form-control" value="{$userID}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        USUARIO ADMIN<input id="isAdmin" class="form-control" value="{$isAdmin}">
                    </div>
                </div>
            </div>
        </form>
    {/if}





    {include 'templates/vue/comentarios.tpl'}

    <a href='verJugadores'><button type="button" class="btn btn-info position-sticky btn-lg">Volver</button></a>
</div>
{include 'templates/footer.tpl'}