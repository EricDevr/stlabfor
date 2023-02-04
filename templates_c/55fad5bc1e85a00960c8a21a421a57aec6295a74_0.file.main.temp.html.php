<?php
/* Smarty version 4.3.0, created on 2023-02-04 22:32:27
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/main.temp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63deceeb8650a2_51438762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55fad5bc1e85a00960c8a21a421a57aec6295a74' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/main.temp.html',
      1 => 1675546328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bottom_posts.html' => 1,
  ),
),false)) {
function content_63deceeb8650a2_51438762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212532329563deceeb7fa667_88569908', "title");
?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/styles.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/bottom_posts.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181146801863deceeb83baf1_70994793', "css");
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
        <a href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/">categorias</a>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128667495263deceeb850669_95775112', "body");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196591827563deceeb8644c1_12091100', "js");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_212532329563deceeb7fa667_88569908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_212532329563deceeb7fa667_88569908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_181146801863deceeb83baf1_70994793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_181146801863deceeb83baf1_70994793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_128667495263deceeb850669_95775112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_128667495263deceeb850669_95775112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_196591827563deceeb8644c1_12091100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_196591827563deceeb8644c1_12091100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
