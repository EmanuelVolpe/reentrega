<?php
/* Smarty version 3.1.33, created on 2019-11-30 21:25:19
  from '/opt/lampp/htdocs/copiaAPI/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de2d02f4a4274_27949202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e0bad3982fb1c34524ca4af451f1864fbc600c' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/login.tpl',
      1 => 1575145402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de2d02f4a4274_27949202 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
    <div class="container-fluid bg-warning">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark"></nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger"></nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark"></nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent"></nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-4 mx-auto bg-secondary">
                    <form class="text-left" action="verifyUser" method="POST" class="col-md-4 offset-md-4 mt-4">
                        <h1 class="text-left font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

                        <div class="form-group font-weight-bold">
                            <label>Usuario (email)</label>
                            <input type="email" name="username" class="form-control" placeholder="Ingrese email">
                        </div>

                        <div class="form-group font-weight-bold">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                        <?php }?>

                        <button type="submit" class="btn btn-primary font-weight-bold">Ingresar</button>
                    </form>
                </div>
                <div class="col-6">
                    <?php if (!isset($_smarty_tpl->tpl_vars['isAdmin']->value)) {?>
                        <a href='registro'><button type="button" class="btn btn-success btn-lg">REGISTRARME!!!!</button></a>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row"> </div>
        </div>

        <div class="container">
            <h1 class="text-uppercase font-weight-bold">lista de equipos</h1>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Equipo</th>
                        <th scope="col">Nombre Del Equipo</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Cantidad de Titulos</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'equipo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->pais;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['equipo']->value->cantidad_titulos;?>
</td>
                        <td><a href='verEquipo/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
'><button type="button" class="btn btn-info">Ver Detalle</button></a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <div class="container">
            <h1></h1>
        </div>
        <div class="container">
            <h1 class="text-uppercase font-weight-bold">lista de jugadores</h1>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Jugador</th>
                        <th scope="col">Nombre Del Jugador</th>
                        <th scope="col">Posicion</th>
                        <th scope="col">Nombre del Equipo</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombreJugador;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombreEquipo;?>
</td>
                        <td><a href='verJugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id_jugador;?>
'><button type="button" class="btn btn-info">Ver Detalle</button></a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>
</body>

</html><?php }
}
