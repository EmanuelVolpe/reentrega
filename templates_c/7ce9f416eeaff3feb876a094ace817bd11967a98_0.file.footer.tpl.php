<?php
/* Smarty version 3.1.33, created on 2019-12-02 21:00:17
  from '/opt/lampp/htdocs/copiaAPI/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de56d51526293_09520975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce9f416eeaff3feb876a094ace817bd11967a98' => 
    array (
      0 => '/opt/lampp/htdocs/copiaAPI/templates/footer.tpl',
      1 => 1575316812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de56d51526293_09520975 (Smarty_Internal_Template $_smarty_tpl) {
?>        
        <?php if (!isset($_smarty_tpl->tpl_vars['isAdmin']->value)) {?>
            <a href='registro'><button type="button" class="btn btn-success fixed-bottom btn-lg">REGISTRARSE !!!!</button></a>
        <?php }?>

        
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
