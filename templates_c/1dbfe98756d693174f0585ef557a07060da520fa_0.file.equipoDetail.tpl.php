<?php
/* Smarty version 3.1.33, created on 2019-12-03 12:51:30
  from '/opt/lampp/htdocs/copiaAPI/templates/equipoDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de64c423428d9_64087219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbfe98756d693174f0585ef557a07060da520fa' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/equipoDetail.tpl',
      1 => 1575373885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de64c423428d9_64087219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

        <h1 class="text-white font-weight-bold"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titulo']->value, 'UTF-8');?>
</h1>

        <h1 class="text-white font-weight-bold">Nombre del Equipo: <?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
</h1>
        <h1 class="text-white font-weight-bold">Pais: <?php echo $_smarty_tpl->tpl_vars['equipo']->value->pais;?>
</h1>
        <h1 class="text-white font-weight-bold">Cantidad de Titulos: <?php echo $_smarty_tpl->tpl_vars['equipo']->value->cantidad_titulos;?>
</h1>
        <h1 class="text-white font-weight-bold">Jugadores:</h1>
                <table class="table table-striped table-bordered font-weight-bold">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center" scope="col">Nombre de los Jugadores</th>
                            <th class="text-center" scope="col">Posicion</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-center">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadoresDelEquipo']->value, 'equipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->jugador;?>
</td> <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->posicion;?>
</td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>

        <a href='verEquipos'><button type="button" class="btn btn-info">Volver</button></a>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
