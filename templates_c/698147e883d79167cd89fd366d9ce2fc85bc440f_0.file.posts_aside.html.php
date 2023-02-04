<?php
/* Smarty version 4.3.0, created on 2023-02-04 01:36:00
  from '/storage/emulated/0/htdocs/stlabfor/templates/home/posts_aside.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dda870796823_40560646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '698147e883d79167cd89fd366d9ce2fc85bc440f' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlabfor/templates/home/posts_aside.html',
      1 => 1675470794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dda870796823_40560646 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="aside-posts-content">
<h2>posts relevantes</h2>
<div class="aside-posts">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts_aside']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
<a href="" class="aside-post">
<img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="image-aside-post">
<h3 class="title-aside-post"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h3>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</section><?php }
}
