<?php
/* Smarty version 4.3.0, created on 2023-02-09 23:34:55
  from 'C:\xampp\htdocs\stlabfor\templates\login\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e5750f006ab7_71270083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c923967e7ba77e27db1842d0b2a0cd4c3eb1a4e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\login\\index.html',
      1 => 1675982010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login/form.html' => 1,
  ),
),false)) {
function content_63e5750f006ab7_71270083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90742727763e5750eeade82_47535282', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205865749163e5750eeb1db3_34453998', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1864598363e5750eeba9e2_54540834', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209080204763e5750f005e44_29479207', "js");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_90742727763e5750eeade82_47535282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_90742727763e5750eeade82_47535282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
login<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_205865749163e5750eeb1db3_34453998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_205865749163e5750eeb1db3_34453998',
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
class Block_1864598363e5750eeba9e2_54540834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1864598363e5750eeba9e2_54540834',
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
class Block_209080204763e5750f005e44_29479207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_209080204763e5750f005e44_29479207',
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
