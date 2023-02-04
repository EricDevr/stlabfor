<?php
/* Smarty version 4.3.0, created on 2023-02-04 20:36:16
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/login/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63deb3b0070484_51782421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e736154b8c987ae7d3083c0a85485a79459ca122' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/login/index.html',
      1 => 1675539374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login/form.html' => 1,
  ),
),false)) {
function content_63deb3b0070484_51782421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13955858763deb3b0056e01_69632806', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81963612763deb3b005b895_73791750', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79091213363deb3b006b845_11188139', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_13955858763deb3b0056e01_69632806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13955858763deb3b0056e01_69632806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
login<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_81963612763deb3b005b895_73791750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_81963612763deb3b005b895_73791750',
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
class Block_79091213363deb3b006b845_11188139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_79091213363deb3b006b845_11188139',
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
}
