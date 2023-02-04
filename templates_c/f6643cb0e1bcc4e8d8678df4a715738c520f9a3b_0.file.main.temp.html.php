<?php
/* Smarty version 4.3.0, created on 2023-02-03 17:09:52
  from '/storage/emulated/0/htdocs/stlabfor/templates/main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dd31d02726d0_56500082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6643cb0e1bcc4e8d8678df4a715738c520f9a3b' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlabfor/templates/main.temp.html',
      1 => 1675440590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dd31d02726d0_56500082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158379834263dd31d025ad54_34780829', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203387743963dd31d0270b32_28605756', "css");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66084814363dd31d0271946_64320114', "body");
?>

</section>
<footer>http://stlab.online <a href="#">^</a></footer>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124168804263dd31d02720f6_78668925', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_158379834263dd31d025ad54_34780829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_158379834263dd31d025ad54_34780829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_203387743963dd31d0270b32_28605756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_203387743963dd31d0270b32_28605756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_66084814363dd31d0271946_64320114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_66084814363dd31d0271946_64320114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_124168804263dd31d02720f6_78668925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_124168804263dd31d02720f6_78668925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
