{literal}
    <section id="seccionComentario">
        
             <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="col-3 text-center" scope="col">Comentario</th>
                        <th class="col-3 text-center" scope="col">Puntaje</th>
                        <th v-if="isAdmin" class="col-6 text-center" scope="col">Opcion</th>
                    </tr>
                </thead>
                <tr v-for="comentario in comentarios">
                    <td class="col-3 text-justify">{{comentario.comentario}}</td> 
                    <td class="col-3 text-center">{{comentario.puntaje}}</td>
                    <td v-if="isAdmin" class="col-6 text-center"><button type="button" class="btn btn-primary" v-on:click="(event)=>{eliminarComentario(event, comentario.id_comentario)}">Eliminar Comentario</button></td>    
                </tr>
            </table>
            <div>
            <select name="ordenar" id="orden">
                <option value="asc">Ascendente</option>
                <option value="desc">Descendente</option>
            </select>
            <button type="button" class="btn btn-primary" id="btn-ordenar">Cambiar</button>
     </div>

        <h3 class="font-weight-bold"> El promedio de los puntajes es: {{promedio}}</h3>   
    </section>
{/literal}