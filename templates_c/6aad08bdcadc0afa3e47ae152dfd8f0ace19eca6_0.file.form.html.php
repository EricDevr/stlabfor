<?php
/* Smarty version 4.3.0, created on 2023-02-04 18:01:46
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/publicar/form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de8f7a3d78d4_00702894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aad08bdcadc0afa3e47ae152dfd8f0ace19eca6' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/publicar/form.html',
      1 => 1675530103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publicar/textarea.html' => 1,
  ),
),false)) {
function content_63de8f7a3d78d4_00702894 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" class="form-publicar">
<input type="file" name="image">
<input type="text" name="title" placeholder="titulo">
<?php $_smarty_tpl->_subTemplateRender("file:publicar/textarea.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
