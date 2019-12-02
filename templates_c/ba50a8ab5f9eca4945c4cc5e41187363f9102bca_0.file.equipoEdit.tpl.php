<?php
/* Smarty version 3.1.33, created on 2019-12-02 23:27:03
  from '/opt/lampp/htdocs/copiaAPI/templates/equipoEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de58fb7b18589_62474925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba50a8ab5f9eca4945c4cc5e41187363f9102bca' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/equipoEdit.tpl',
      1 => 1575325619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de58fb7b18589_62474925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-white font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <form class="text-white font-weight-bold" action="actualizarEquipo" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombreEditado" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pais</label>
                        <input name="paisEditado" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->pais;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Cantidad de Titulos</label>
                        <input name="cantidadTitulosEditado" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->cantidad_titulos;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="id_equipo" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Edicion</button>
        </form>
        
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
