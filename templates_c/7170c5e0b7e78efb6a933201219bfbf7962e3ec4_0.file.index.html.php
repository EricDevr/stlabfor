<?php
/* Smarty version 4.3.0, created on 2023-02-04 17:21:12
  from 'C:\xampp\htdocs\stlabfor\templates\home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de85f8b04646_11363672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7170c5e0b7e78efb6a933201219bfbf7962e3ec4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\home\\index.html',
      1 => 1675527532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/portada.html' => 1,
    'file:home/new_posts.html' => 1,
    'file:home/aside_posts.html' => 1,
  ),
),false)) {
function content_63de85f8b04646_11363672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28647060263de85f8a0fde1_80399245', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153589894163de85f8a129d1_57141894', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103860664163de85f8a8d312_39800647', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_28647060263de85f8a0fde1_80399245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_28647060263de85f8a0fde1_80399245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stlab<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_153589894163de85f8a129d1_57141894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_153589894163de85f8a129d1_57141894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/home.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/portada.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/new_posts.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/aside_posts.css">
<?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_103860664163de85f8a8d312_39800647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_103860664163de85f8a8d312_39800647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="top">
<div class="left">
<?php $_smarty_tpl->_subTemplateRender("file:home/portada.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:home/new_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<div class="right">
<?php $_smarty_tpl->_subTemplateRender("file:home/aside_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</section>
<section class="bottom"></section>
<?php
}
}
/* {/block "body"} */
}
