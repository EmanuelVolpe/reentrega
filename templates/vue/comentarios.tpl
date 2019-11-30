{literal}
    <section id="seccionComentario">

        <div class="card">

             <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Comentario</th>
                        <th scope="col">Puntaje</th>
                        <th scope="col">Opcion</th>
                    </tr>
                </thead>
                <tr v-for="comentario in comentarios">
                    <td>{{comentario.comentario}}</td> 
                    <td>{{comentario.puntaje}}</td>
                    <td><button v-if="isAdmin" type="button" class="btn btn-primary" v-on:click="(event)=>{eliminarComentario(event, comentario.id_comentario)}">Eliminar Comentario</button></td>    
                </tr>
            </table>
        </div> 

        <span> El promedio es: {{promedio}}</span>   
    </section>
{/literal}