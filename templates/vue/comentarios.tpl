{literal}
<section id="seccionComentario">

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="col-3 text-center" scope="col">Comentario</th>
                <th class="col-3 text-center" scope="col">Puntaje</th>
                {/literal}
                {if $isAdmin == 1}
                {literal}
                <th class="col-6 text-center" scope="col">Opcion</th>
                {/literal}
                {/if}
                {literal}
            </tr>
        </thead>
        <tbody>
            <tr v-for="comentario in comentarios">
                <td class="col-3 text-justify">{{comentario.comentario}}</td>
                <td class="col-3 text-center">{{comentario.puntaje}}</td>
                {/literal}
                {if $isAdmin == 1}
                {literal}
                <td class="col-6 text-center"><button type="button" class="btn btn-primary" v-on:click="(event)=>{eliminarComentario(event, comentario.id_comentario)}">Eliminar Comentario</button></td>
                {/literal}
                {/if}
                {literal}
            </tr>
        </tbody>
    </table>
    
    <br>

    {/literal}
    {if isset($isAdmin)}
    {literal}
    <button type="submit" class="btn btn-primary" v-on:click="(event)=>{crearComentario(event)}">Crear
        Comentario</button>
    {/literal}
    {/if}
    <br>
    
    {literal}
    <div>
        <div class="row">
            <div class="col-9">
                <select class="form-control col-2" name="ordenar" id="orden">
                    <option value="asc">Ascendente </option>
                    <option value="desc">Descendente</option>
                </select>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary" id="btn-ordenar">Ordenar</button>
            </div>
        </div>
    </div>
    <br>

    <h3 class="font-weight-bold"> El promedio de los puntajes es: {{promedio}}</h3>
</section>

{/literal}