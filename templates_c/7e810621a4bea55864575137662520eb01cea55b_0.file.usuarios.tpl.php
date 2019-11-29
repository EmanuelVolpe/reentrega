<?php
/* Smarty version 3.1.33, created on 2019-11-26 18:54:54
  from '/opt/lampp/htdocs/copiaAPI/templates/usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd66ee049905_74684840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e810621a4bea55864575137662520eb01cea55b' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/usuarios.tpl',
      1 => 1574198563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddd66ee049905_74684840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">

        <table class="table table-striped table-bordered">  
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Usuario</th>
                    <th scope="col">Nombre Del Usuario</th>
                    <th scope="col">Administrador</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->username;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->administ;?>
</td>
                    <td>
                        <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value) && $_smarty_tpl->tpl_vars['isAdmin']->value == 1) {?> 
                            <a href='eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
'><button type="button" class="btn btn-danger">Borrar Usuario</button></a>
                            <a href='editarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
'><button type="button" class="btn btn-danger">Hacer ADMIN</button></a>
                            
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
