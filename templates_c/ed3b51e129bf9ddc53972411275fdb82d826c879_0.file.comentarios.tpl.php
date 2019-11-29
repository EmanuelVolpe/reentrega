<?php
/* Smarty version 3.1.33, created on 2019-11-26 22:05:52
  from '/opt/lampp/htdocs/copiaAPI/templates/vue/comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd93b0cd9a88_03029719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed3b51e129bf9ddc53972411275fdb82d826c879' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/vue/comentarios.tpl',
      1 => 1574802349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd93b0cd9a88_03029719 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
