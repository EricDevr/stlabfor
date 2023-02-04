<?php
/* Smarty version 4.3.0, created on 2023-02-04 17:58:18
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de8eaaab84d0_89488333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55fad5bc1e85a00960c8a21a421a57aec6295a74' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/main.temp.html',
      1 => 1675529896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63de8eaaab84d0_89488333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50299800563de8eaaa9d040_14284247', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98571836463de8eaaab5675_88166222', "css");
?>

</head>
<body>
<header>
<div>
    <h1><a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/" class="title-page">STLAB</a></h1>
    <div class="btn-menu"><span onclick="open_menu()"><img src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/images/icon-menu.png" class="image-menu"></span>
    </div>
    <div class="menu">
        <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/">inicio</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/">categorias</a>
    </div>
</div>
</header>
<section class="content-page">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186243401263de8eaaab6ae6_47312006', "body");
?>

</section>
<footer>http://stlab.online <a href="#">^</a></footer>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214745697263de8eaaab7792_02191216', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_50299800563de8eaaa9d040_14284247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_50299800563de8eaaa9d040_14284247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_98571836463de8eaaab5675_88166222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_98571836463de8eaaab5675_88166222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_186243401263de8eaaab6ae6_47312006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_186243401263de8eaaab6ae6_47312006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_214745697263de8eaaab7792_02191216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_214745697263de8eaaab7792_02191216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
