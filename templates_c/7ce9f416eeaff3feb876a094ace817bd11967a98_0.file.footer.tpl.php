<?php
/* Smarty version 3.1.33, created on 2019-11-30 16:18:18
  from '/opt/lampp/htdocs/copiaAPI/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de2883a37bd77_23463518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce9f416eeaff3feb876a094ace817bd11967a98' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/footer.tpl',
      1 => 1575127094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de2883a37bd77_23463518 (Smarty_Internal_Template $_smarty_tpl) {
?>        
        <?php if (!isset($_smarty_tpl->tpl_vars['isAdmin']->value)) {?>
            <a href='login'><button type="button" class="btn btn-success fixed-bottom btn-lg">REGISTRARSE !!!!</button></a>
        <?php }?>

        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
