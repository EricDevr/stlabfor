<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:31:37
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/bottom_posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e5825912f495_90829334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15767e9754e197f9aff347476b3865737dc5ffbb' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/bottom_posts.html',
      1 => 1675985481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ads.html' => 1,
  ),
),false)) {
function content_63e5825912f495_90829334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/Stlabfor1/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/storage/emulated/0/htdocs/Stlabfor1/includes/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<section class="botton-posts">
<div class="sec">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['internet']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
/" class="post-bp">
<span class="date-bp"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['category'];?>
</span>
<h3 class="title-bp"><?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," "),70);?>
</h3>
<img class="image-bp" src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
">
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:ads.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="sec">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entretenimiento']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
/" class="post-bp">
<span class="date-bp"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['category'];?>
</span>
<h3 class="title-bp"><?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," "),70);?>
</h3>
<img class="image-bp" src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
">
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</section><?php }
}
