<?php
/* Smarty version 3.1.33, created on 2019-12-02 23:14:13
  from '/opt/lampp/htdocs/copiaAPI/templates/equipoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de58cb5b35589_57743728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811bdf36905b8e8c5b53509e027472bebf95c6b3' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/equipoList.tpl',
      1 => 1575324845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de58cb5b35589_57743728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="text-white font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value) && $_smarty_tpl->tpl_vars['isAdmin']->value == 1) {?>
        <form class="text-white font-weight-bold" action="nuevoEquipo" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Pais</label>
                        <input name="pais" type="text" class="form-control" placeholder="Pais">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Cantidad de Titulos</label>
                        <input name="cantidadTitulos" type="text" class="form-control" placeholder="Cantidad de Titulos">
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar Equipo</button>
        </form>
    <?php }?>

        <br>

        <table class="table table-striped table-bordered text-white font-weight-bold">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" scope="col">ID Equipo</th>
                    <th class="text-center" scope="col">Nombre Del Equipo</th>
                    <th class="text-center" scope="col">Pais</th>
                    <th class="text-center" scope="col">Cantidad de Titulos</th>
                    <th class="text-center" scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'equipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
?>
                    <tr class="bg-secondary">
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
</td> 
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
</td> 
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->pais;?>
</td> 
                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->cantidad_titulos;?>
</td> 
                        <td class="text-center"><a href='verEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-info">Ver Detalle</button></a>
                            <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value) && $_smarty_tpl->tpl_vars['isAdmin']->value == 1) {?>
                                <a href='editarEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-success">Editar</button></a>     
                                <a href='eliminarEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-danger">Borrar</button></a>
                            <?php }?></td>  
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
