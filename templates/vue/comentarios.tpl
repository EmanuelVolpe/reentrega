{literal}
<section id="seccionComentario">

        <div class="card">

            <div v-if="loading" class="card-body">
                Cargando...
            </div>

            <ul v-if="!loading" class="list-group list-group-flush">
                <a v-for="comentario in comentarios"  class="list-group-item list-group-item-action"> 
                    {{ comentario.comentario }} 
                </a>
            </ul>
        </div>     
</section>
{/literal}