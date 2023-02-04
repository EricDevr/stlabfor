<?php
/* Smarty version 4.3.0, created on 2023-02-04 17:21:13
  from 'C:\xampp\htdocs\stlabfor\templates\home\aside_posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de85f9112539_59290094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23477678eec2fd6d9334d20eb6d3ae7268d11c74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\home\\aside_posts.html',
      1 => 1675527532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63de85f9112539_59290094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\stlabfor\\includes\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
