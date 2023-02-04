<?php
/* Smarty version 4.3.0, created on 2023-02-04 17:23:24
  from 'C:\xampp\htdocs\stlabfor\templates\home\portada.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de867ceaf5f0_94006864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de8da3d99066fb047db894c81626bbbba7d0a028' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\home\\portada.html',
      1 => 1675527802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63de867ceaf5f0_94006864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\stlabfor\\includes\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<a class="portada" href="">
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
