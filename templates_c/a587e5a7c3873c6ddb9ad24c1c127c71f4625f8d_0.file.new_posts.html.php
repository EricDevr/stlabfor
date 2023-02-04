<?php
/* Smarty version 4.3.0, created on 2023-02-04 19:56:42
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/home/new_posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63deaa6a688f85_17308113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a587e5a7c3873c6ddb9ad24c1c127c71f4625f8d' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/home/new_posts.html',
      1 => 1675537000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63deaa6a688f85_17308113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/htdocs/Stlabfor1/includes/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<section class="new-posts-content">
    <h2 class="title-section">Posts Recientes</h2>
    <div class="new-posts">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
/" class="new-post">
        <h2 class="title-new-post">
            <span class="date-new-post"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</span>
            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['post']->value['title'],"-"," ");?>
</h2>
        <img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="image-new-post">
    </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section><?php }
}
