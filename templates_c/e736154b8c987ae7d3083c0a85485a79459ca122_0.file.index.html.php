<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:34:20
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/login/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e582fcc9d509_80884366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e736154b8c987ae7d3083c0a85485a79459ca122' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/login/index.html',
      1 => 1675985480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login/form.html' => 1,
  ),
),false)) {
function content_63e582fcc9d509_80884366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214318126063e582fcc8b5f0_08635356', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33048469763e582fcc8c847_96876916', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140522817163e582fcc91771_58092048', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131947923563e582fcc9c495_72422735', "js");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_214318126063e582fcc8b5f0_08635356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_214318126063e582fcc8b5f0_08635356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
login<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_33048469763e582fcc8c847_96876916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_33048469763e582fcc8c847_96876916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/login_form.css">
<?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_140522817163e582fcc91771_58092048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_140522817163e582fcc91771_58092048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="content-login-form">
<?php $_smarty_tpl->_subTemplateRender("file:login/form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section>
<?php
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_131947923563e582fcc9c495_72422735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_131947923563e582fcc9c495_72422735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/login.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
