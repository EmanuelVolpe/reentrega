<?php
/* Smarty version 3.1.33, created on 2019-11-30 11:22:45
  from '/opt/lampp/htdocs/copiaAPI/templates/vue/comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de242f57912c1_34295640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed3b51e129bf9ddc53972411275fdb82d826c879' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/vue/comentarios.tpl',
      1 => 1575109362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de242f57912c1_34295640 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
