<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:34:20
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/login/form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e582fcddfff1_04500811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda37d64456a45e30936e0a071f56fefd70446ab' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/login/form.html',
      1 => 1675985480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e582fcddfff1_04500811 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" class="login-form">
    <h3>Iniciar Sesión</h3>
    <input type="email" class="text" name="email" placeholder="email">
    <input type="password" class="text pass" name="pass" placeholder="password">
    <span class="checkpass">
        <input type="checkbox" name="check" class="check" onclick="showpass(this)"> <span>Mostrar contraseña
        </span>
    </span>
    <button>login</button>
    <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
    <div class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <?php }?>
</form><?php }
}
