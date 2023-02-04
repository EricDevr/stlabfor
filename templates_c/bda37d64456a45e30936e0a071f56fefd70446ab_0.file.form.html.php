<?php
/* Smarty version 4.3.0, created on 2023-02-04 20:52:12
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/login/form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63deb76ccb9de7_63184007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda37d64456a45e30936e0a071f56fefd70446ab' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/login/form.html',
      1 => 1675540330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63deb76ccb9de7_63184007 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" class="login-form">
    <h3>Iniciar Sesión</h3>
    <input type="email" name="email" placeholder="email">
    <input type="password" name="pass" placeholder="password">
    <button>login</button>
    <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
    <div class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <?php }?>
</form><?php }
}
