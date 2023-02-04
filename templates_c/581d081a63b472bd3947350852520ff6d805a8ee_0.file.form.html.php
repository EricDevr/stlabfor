<?php
/* Smarty version 4.3.0, created on 2023-02-04 17:25:10
  from 'C:\xampp\htdocs\stlabfor\templates\publicar\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de86e6859093_26177636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581d081a63b472bd3947350852520ff6d805a8ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\publicar\\form.html',
      1 => 1675527532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63de86e6859093_26177636 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" class="form-publicar">
<input type="file" name="image">
<input type="text" name="title" placeholder="titulo">
<div class="bcod">
    <span></span>
    <textarea name="content" placeholder="contenido"></textarea>
</div>
<select name="category" class="categories">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<button type="button" onclick="publicar()">publicar</button>
</form><?php }
}
