<?php
/* Smarty version 3.1.33, created on 2019-11-28 21:15:38
  from '/opt/lampp/htdocs/copiaAPI/templates/usuarioEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de02aeadb2718_97786983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '765d7f6bd560f3eda0243b51ceb5a73425a040b9' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/usuarioEdit.tpl',
      1 => 1574286266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de02aeadb2718_97786983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
    
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <form action="actualizarUsuario" method="POST">
            <div class="row">
                
                <div class="col">
                    <div class="form-group">
                        <label>Permiso de Administracion</label>
                        <select name="administrador" class="form-control">
                            <option value=0>0</option>
                            <option value=1>1</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        Username<input name="username" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->username;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        ID usuario Logueado<input name="id_usuario" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        Valor Admin actual<input name="administ" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->administ;?>
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
