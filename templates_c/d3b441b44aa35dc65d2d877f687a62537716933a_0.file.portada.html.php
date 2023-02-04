<?php
/* Smarty version 4.3.0, created on 2023-02-03 02:48:49
  from '/storage/emulated/0/htdocs/stlabfor/templates/home/portada.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dc6801c09793_40422958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3b441b44aa35dc65d2d877f687a62537716933a' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlabfor/templates/home/portada.html',
      1 => 1675388927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dc6801c09793_40422958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/stlabfor/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<a class="portada" href="">
<span class="date"><?php echo $_smarty_tpl->tpl_vars['portada']->value['date'];?>
</span>
<h2 class="title-port"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['portada']->value['title'],"-"," ");?>
</h2>
<img class="img" src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['portada']->value['image'];?>
">
</a><?php }
}
