<?php
/* Smarty version 3.1.33, created on 2019-12-03 12:55:57
  from '/opt/lampp/htdocs/copiaAPI/templates/vue/comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de64d4da9a850_61829989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed3b51e129bf9ddc53972411275fdb82d826c879' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/vue/comentarios.tpl',
      1 => 1575374146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de64d4da9a850_61829989 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="seccionComentario">

    <table class="table table-striped table-bordered font-weight-bold">
        <thead class="thead-dark">
            <tr>
                <th class="col-3 text-center" scope="col">Comentario</th>
                <th class="col-3 text-center" scope="col">Puntaje</th>
                
                <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value == 1) {?>
                
                <th class="col-6 text-center" scope="col">Opcion</th>
                
                <?php }?>
                
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr v-for="comentario in comentarios">
                <td class="col-3 text-justify">{{comentario.comentario}}</td>
                <td class="col-3 text-center">{{comentario.puntaje}}</td>
                
                <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value == 1) {?>
                
                <td class="col-6 text-center"><button type="button" class="btn btn-primary" v-on:click="(event)=>{eliminarComentario(event, comentario.id_comentario)}">Eliminar Comentario</button></td>
                
                <?php }?>
                
            </tr>
        </tbody>
    </table>
    
    <br>

    
    <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value)) {?>
    
    <button type="submit" class="btn btn-primary" v-on:click="(event)=>{crearComentario(event)}">Crear
        Comentario</button>
    <br>
    
    <?php }?>
    
    
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

    <h3 class="text-white font-weight-bold"> El promedio de los puntajes es: {{promedio}}</h3>
</section>

<?php }
}
