<?php
/* Smarty version 4.3.0, created on 2023-02-04 19:57:47
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/home/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63deaaab874a56_75657276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abfa65fba20793502cc00b703cd292b7108bebd8' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/home/index.html',
      1 => 1675537065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/portada.html' => 1,
    'file:home/new_posts.html' => 1,
    'file:aside_posts.html' => 1,
  ),
),false)) {
function content_63deaaab874a56_75657276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7629256263deaaab8654a7_09487996', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94282949663deaaab8661b0_55507852', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46701660763deaaab869c82_38660331', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_7629256263deaaab8654a7_09487996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7629256263deaaab8654a7_09487996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stlab<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_94282949663deaaab8661b0_55507852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_94282949663deaaab8661b0_55507852',
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
class Block_46701660763deaaab869c82_38660331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_46701660763deaaab869c82_38660331',
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
<?php $_smarty_tpl->_subTemplateRender("file:aside_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</section>
<section class="bottom"></section>
<?php
}
}
/* {/block "body"} */
}
