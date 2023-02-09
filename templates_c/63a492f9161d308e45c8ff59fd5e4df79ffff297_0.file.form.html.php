<?php
/* Smarty version 4.3.0, created on 2023-02-09 23:42:37
  from 'C:\xampp\htdocs\stlabfor\templates\login\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e576dd05c062_98652096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a492f9161d308e45c8ff59fd5e4df79ffff297' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\login\\form.html',
      1 => 1675982555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e576dd05c062_98652096 (Smarty_Internal_Template $_smarty_tpl) {
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
