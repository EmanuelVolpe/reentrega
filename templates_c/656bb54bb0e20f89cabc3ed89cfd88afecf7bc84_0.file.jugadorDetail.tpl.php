<?php
/* Smarty version 3.1.33, created on 2019-12-02 23:30:49
  from '/opt/lampp/htdocs/copiaAPI/templates/jugadorDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de59099aea7e6_25314497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '656bb54bb0e20f89cabc3ed89cfd88afecf7bc84' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/jugadorDetail.tpl',
      1 => 1575325846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/comentarios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de59099aea7e6_25314497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <h1 class="text-white font-weight-bold"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titulo']->value, 'UTF-8');?>
</h1>

    <div class="container-fluid">
        <h1 class="text-white font-weight-bold">Nombre del Jugador: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->jugador;?>
</h1>
        <h1 class="text-white font-weight-bold">Posicion del Jugador: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</h1>
        <h1 class="text-white font-weight-bold">Equipo del Jugador: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombreEquipo;?>
</h1>
        <h1 class="text-white font-weight-bold">ID del Jugador: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
</h1>
        <?php if (isset($_smarty_tpl->tpl_vars['jugador']->value->imagen)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->imagen;?>
" class="img-fluid rounded border border-success" />
        <?php }?>
    </div>

    <br>

    <?php if (isset($_smarty_tpl->tpl_vars['isAdmin']->value) && (($_smarty_tpl->tpl_vars['isAdmin']->value == 1) || ($_smarty_tpl->tpl_vars['isAdmin']->value == 0))) {?>
        <form class="text-white font-weight-bold" id="formComentario">
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <label class="lead font-weight-bold" for="exampleFormControlTextarea1">Ingrese Comentario</label>
                        <textarea class="form-control" id="comentario" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label class="lead font-weight-bold" for="exampleFormControlSelect1">Puntuar Comentario</label>
                        <select class="form-control" id="puntaje">
                            <option value="1"> 1 - Malo </option>
                            <option value="2"> 2 - Regular </option>
                            <option value="3"> 3 - Bueno </option>
                            <option value="4"> 4 - Muy Bueno </option>
                            <option value="5"> 5 - Excelente </option>
                        </select>
                    </div>
                </div>
            </div>
            <!--div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="submit" class="btn btn-success font-weight-bold" id="enviaComentario">Enviar Comentario</button>
                </div>
            </div-->
            <br>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        ID JUGADOR<input id="id_jugador" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        ID USUARIO<input id="id_usuario" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userID']->value;?>
">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        USUARIO ADMIN<input id="isAdmin" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['isAdmin']->value;?>
">
                    </div>
                </div>
            </div>
        </form>
    <?php } else { ?>
       <form id="formComentario">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        ID JUGADOR<input id="id_jugador" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
">
                    </div>
                </div>
            </div>
        </form>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <a href='verJugadores'><button type="button" class="btn btn-info position-sticky btn-lg">Volver</button></a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
