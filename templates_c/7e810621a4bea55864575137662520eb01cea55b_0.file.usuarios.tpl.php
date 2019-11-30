<?php
/* Smarty version 3.1.33, created on 2019-11-30 13:07:16
  from '/opt/lampp/htdocs/copiaAPI/templates/usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de25b747d47d4_49684130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e810621a4bea55864575137662520eb01cea55b' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/usuarios.tpl',
      1 => 1575115634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de25b747d47d4_49684130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">

        <table class="table table-striped table-bordered">  
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID Usuario</th>
                    <th class="text-center" scope="col">Nombre Del Usuario</th>
                    <th class="text-center" scope="col">Administrador</th>
                    <th class="text-center" scope="col">Opciones</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                <tr>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
</td> 
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->username;?>
</td> 
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->administ;?>
</td>
                    <td class="text-center">
                        <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value) && $_smarty_tpl->tpl_vars['isAdmin']->value == 1) {?> 
                            <a href='eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
'><button type="button" class="btn btn-danger">Borrar Usuario</button></a>
                            <a href='editarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
'><button type="button" class="btn btn-success">Hacer ADMIN</button></a>
                            
                        <?php }?>
                    </td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    
    </div>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
