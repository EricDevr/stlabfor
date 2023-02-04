<?php
/* Smarty version 4.3.0, created on 2023-02-04 19:47:28
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/post/post.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dea84024aad7_37667510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22c2b0623d3904ec20c914e393f654a1954ebcb8' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/post/post.html',
      1 => 1675536446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dea84024aad7_37667510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/Stlabfor1/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
</section><?php }
}
