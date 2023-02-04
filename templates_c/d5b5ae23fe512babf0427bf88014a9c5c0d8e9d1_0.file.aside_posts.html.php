<?php
/* Smarty version 4.3.0, created on 2023-02-04 19:55:58
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/home/aside_posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63deaa3ed6c6a2_54023460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5b5ae23fe512babf0427bf88014a9c5c0d8e9d1' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/home/aside_posts.html',
      1 => 1675536956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63deaa3ed6c6a2_54023460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/Stlabfor1/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="aside-posts-content">
<h2 class="aside-title-section">Posts Relevantes</h2>
<div class="aside-posts">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aside_posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
/" class="aside-post">
<img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="image-aside-post">
<h3 class="title-aside-post">
<span class="date-aside-post"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</span>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," ");?>
</h3>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</section><?php }
}
