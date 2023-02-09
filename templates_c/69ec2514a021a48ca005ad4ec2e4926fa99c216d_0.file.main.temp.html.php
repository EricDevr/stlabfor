<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:04:14
  from 'C:\xampp\htdocs\stlabfor\templates\main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e57bee05c420_23671787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ec2514a021a48ca005ad4ec2e4926fa99c216d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\main.temp.html',
      1 => 1675983851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bottom_posts.html' => 1,
  ),
),false)) {
function content_63e57bee05c420_23671787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129582594663e57bee039448_12911957', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/bottom_posts.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179648590663e57bee03f5f1_58461750', "css");
?>

</head>
<body>
<div id="fb-root"></div>
<?php echo '<script'; ?>
 async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="TaINU9K5"><?php echo '</script'; ?>
>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
/"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value != '') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/section/publicar/">nuevo post</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/logout/">logout</a>
        <?php }?>
    </div>
</div>
</header>
<section class="content-page">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65246414963e57bee0549c8_72310487', "body");
?>

<?php $_smarty_tpl->_subTemplateRender("file:bottom_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/views_count.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132423279563e57bee05b433_93371340', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_129582594663e57bee039448_12911957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_129582594663e57bee039448_12911957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_179648590663e57bee03f5f1_58461750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_179648590663e57bee03f5f1_58461750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_65246414963e57bee0549c8_72310487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_65246414963e57bee0549c8_72310487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_132423279563e57bee05b433_93371340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_132423279563e57bee05b433_93371340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
