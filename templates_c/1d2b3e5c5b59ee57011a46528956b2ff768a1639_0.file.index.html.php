<?php
/* Smarty version 4.3.0, created on 2023-02-04 01:43:32
  from '/storage/emulated/0/htdocs/stlabfor/templates/home/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ddaa340a14f3_69968324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2b3e5c5b59ee57011a46528956b2ff768a1639' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlabfor/templates/home/index.html',
      1 => 1675471409,
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
function content_63ddaa340a14f3_69968324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113144916563ddaa3408c196_17299610', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15488209763ddaa3408cec3_04815228', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214069473363ddaa340920e4_17062093', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_113144916563ddaa3408c196_17299610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_113144916563ddaa3408c196_17299610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
stlab<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_15488209763ddaa3408cec3_04815228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_15488209763ddaa3408cec3_04815228',
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
class Block_214069473363ddaa340920e4_17062093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_214069473363ddaa340920e4_17062093',
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
