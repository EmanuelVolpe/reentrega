<?php
/* Smarty version 3.1.33, created on 2019-12-02 23:26:05
  from '/opt/lampp/htdocs/copiaAPI/templates/jugadorEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de58f7de84800_02396087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7ce95051636d11b6ac003db792820a2022d702' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/jugadorEdit.tpl',
      1 => 1575325515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de58f7de84800_02396087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
    
        <h1 class="text-white font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <form class="text-white font-weight-bold" action="actualizarJugador" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombreEditado" type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->jugador;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Posicion</label>
                        <select name="posicionEditada" class="form-control">
                            <option value="arquero">Arquero</option>
                            <option value="defensor">Defensor</option>
                            <option value="volante">Volante</option>
                            <option value="delantero">Delantero</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nombre del Equipo</label>
                        <select name="id_equipoEditado" class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'equipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
</option> 
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input name="id_jugadorEditado" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
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
