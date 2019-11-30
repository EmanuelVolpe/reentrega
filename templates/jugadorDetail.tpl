{include 'templates/header.tpl'}

    <div class="container">
        
        <h1>{$titulo|upper}</h1>

        <h1>Nombre del Jugador:   {$jugador->jugador}</h1>
        <h1>Posicion del Jugador: {$jugador->posicion}</h1>
        <h1>Equipo del Jugador:   {$jugador->nombreEquipo}</h1>
        <h1>ID del Jugador:       {$jugador->id_jugador}</h1>
        {if isset($jugador->imagen)}
            <img src="{$jugador->imagen}" class="img-fluid rounded border border-success"/>
        {/if}
        
        <form id="formComentario">
            <div class="row">
                <div class="col-10">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ingrese Comentario</label>
                        <textarea class="form-control" id="comentario" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Puntuar Comentario</label>
                        <select class="form-control" id="puntaje">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
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
                <button type="submit" class="btn btn-success" id="enviaComentario" >Enviar Comentario</button>
            </div>
        </form>

        <div class="container">
            {include 'templates/vue/comentarios.tpl'}
        </div>
        
        <a href='verJugadores'><button type="button" class="btn btn-info fixed-bottom btn-lg">Volver</button></a>
    </div>
{include 'templates/footer.tpl'}