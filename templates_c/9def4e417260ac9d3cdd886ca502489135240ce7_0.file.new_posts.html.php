<?php
/* Smarty version 4.3.0, created on 2023-02-04 17:21:13
  from 'C:\xampp\htdocs\stlabfor\templates\home\new_posts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de85f901f871_51767963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9def4e417260ac9d3cdd886ca502489135240ce7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\home\\new_posts.html',
      1 => 1675527532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63de85f901f871_51767963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\stlabfor\\includes\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
    <a href="" class="new-post">
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
