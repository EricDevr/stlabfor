<?php
/* Smarty version 4.3.0, created on 2023-02-04 17:25:10
  from 'C:\xampp\htdocs\stlabfor\templates\publicar\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de86e676b588_11190208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bfbda8488a45f39a2c33377f2453ca2573af8c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\publicar\\index.html',
      1 => 1675527532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publicar/form.html' => 1,
  ),
),false)) {
function content_63de86e676b588_11190208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72586698863de86e675cc30_82782662', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177774279263de86e675f261_31860453', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97359021863de86e67656c5_92567851', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181834165863de86e676a751_07877589', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_72586698863de86e675cc30_82782662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_72586698863de86e675cc30_82782662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
publicar<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_177774279263de86e675f261_31860453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_177774279263de86e675f261_31860453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/publicar.css">
<?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_97359021863de86e67656c5_92567851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_97359021863de86e67656c5_92567851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="publicar-cont">
<?php $_smarty_tpl->_subTemplateRender("file:publicar/form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section>
<?php
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_181834165863de86e676a751_07877589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_181834165863de86e676a751_07877589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/publicar.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
