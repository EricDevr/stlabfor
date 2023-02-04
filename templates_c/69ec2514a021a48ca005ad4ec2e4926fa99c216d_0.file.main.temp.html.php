<?php
/* Smarty version 4.3.0, created on 2023-02-04 17:21:12
  from 'C:\xampp\htdocs\stlabfor\templates\main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de85f8c9c145_65593087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ec2514a021a48ca005ad4ec2e4926fa99c216d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\main.temp.html',
      1 => 1675527532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63de85f8c9c145_65593087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86138039863de85f8c97307_09108915', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176157126463de85f8c98878_13910729', "css");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84448812463de85f8c9a3f1_68694572', "body");
?>

</section>
<footer>http://stlab.online <a href="#">^</a></footer>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74582084263de85f8c9b5b6_69253756', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_86138039863de85f8c97307_09108915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_86138039863de85f8c97307_09108915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_176157126463de85f8c98878_13910729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_176157126463de85f8c98878_13910729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_84448812463de85f8c9a3f1_68694572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_84448812463de85f8c9a3f1_68694572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_74582084263de85f8c9b5b6_69253756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_74582084263de85f8c9b5b6_69253756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
