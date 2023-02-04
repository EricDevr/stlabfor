<?php
/* Smarty version 4.3.0, created on 2023-02-04 19:26:33
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/home/portada.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dea35998c288_70996885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a97fb0e02aea06a44fdef30fe7eddf191b2136' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/home/portada.html',
      1 => 1675535191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dea35998c288_70996885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/Stlabfor1/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<a class="portada" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['portada']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['portada']->value['title'];?>
/">
<?php if ($_smarty_tpl->tpl_vars['portada']->value != '') {?>
<span class="date"><?php echo $_smarty_tpl->tpl_vars['portada']->value['date'];?>
</span>
<h2 class="title-port"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['portada']->value['title'],"-"," ");?>
</h2>
<img class="img" src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['portada']->value['image'];?>
">
<?php }?>
</a><?php }
}
