{literal}
    <section id="seccionComentario">

        <div class="card">

             <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="col-5 text-center" scope="col">Comentario</th>
                        <th class="col-3 text-center" scope="col">Puntaje</th>
                        <th class="col-4 text-center" scope="col">Opcion</th>
                    </tr>
                </thead>
                <tr v-for="comentario in comentarios">
                    <td class="text-justify">{{comentario.comentario}}</td> 
                    <td class="text-center">{{comentario.puntaje}}</td>
                    <td><button v-if="isAdmin" type="button" class="btn btn-primary" v-on:click="(event)=>{eliminarComentario(event, comentario.id_comentario)}">Eliminar Comentario</button></td>    
                </tr>
            </table>
        </div> 

        <h3 class="font-weight-bold"> El promedio de los puntajes es: {{promedio}}</h3>   
    </section>
{/literal}