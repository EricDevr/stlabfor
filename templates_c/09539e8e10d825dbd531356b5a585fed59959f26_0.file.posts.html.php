<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:34:05
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/category/posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e582ed34b2e6_01099928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09539e8e10d825dbd531356b5a585fed59959f26' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/category/posts.html',
      1 => 1675985480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e582ed34b2e6_01099928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/Stlabfor1/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="posts">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
/" class="post">
<span class="date"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['category'];?>
</span>
<img class="image" src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
">
<h2 class="title"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," ");?>
</h2>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
