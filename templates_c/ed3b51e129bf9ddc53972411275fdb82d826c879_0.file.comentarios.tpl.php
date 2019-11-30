<?php
/* Smarty version 3.1.33, created on 2019-11-30 15:30:57
  from '/opt/lampp/htdocs/copiaAPI/templates/vue/comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de27d21808341_60123557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed3b51e129bf9ddc53972411275fdb82d826c879' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/vue/comentarios.tpl',
      1 => 1575124255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de27d21808341_60123557 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

        <h3 class="font-weight-bold"> El promedio de los puntajes es: {{promedio}}</h3>   
    </section>
<?php }
}
