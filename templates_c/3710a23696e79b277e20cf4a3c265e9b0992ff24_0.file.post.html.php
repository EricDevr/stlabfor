<?php
/* Smarty version 4.3.0, created on 2023-02-09 23:47:02
  from 'C:\xampp\htdocs\stlabfor\templates\post\post.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e577e6e4e135_07110855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3710a23696e79b277e20cf4a3c265e9b0992ff24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\post\\post.html',
      1 => 1675980669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post/comments.html' => 1,
  ),
),false)) {
function content_63e577e6e4e135_07110855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\stlabfor\\includes\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="post">
<span class="date-post"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</span>
<h1 class="title-post"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," ");?>
</h1>
<img class="image-post" src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
">
<div class="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:post/comments.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section><?php }
}
