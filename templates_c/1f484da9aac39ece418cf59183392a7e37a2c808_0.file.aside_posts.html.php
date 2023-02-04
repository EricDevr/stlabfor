<?php
/* Smarty version 4.3.0, created on 2023-02-04 02:03:51
  from '/storage/emulated/0/htdocs/stlabfor/templates/home/aside_posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ddaef7e97341_50767438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f484da9aac39ece418cf59183392a7e37a2c808' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlabfor/templates/home/aside_posts.html',
      1 => 1675472627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ddaef7e97341_50767438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/stlabfor/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
<a href="" class="aside-post">
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
