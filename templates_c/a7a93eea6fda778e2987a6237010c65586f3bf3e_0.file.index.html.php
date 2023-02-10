<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:42:37
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/post/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e584ed4d1182_43223351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a93eea6fda778e2987a6237010c65586f3bf3e' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/post/index.html',
      1 => 1675985481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post/post.html' => 1,
    'file:aside_posts.html' => 1,
  ),
),false)) {
function content_63e584ed4d1182_43223351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55848852963e584ed4ae6b9_38078028', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26796032263e584ed4be060_93494436', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153730944363e584ed4bf154_95669253', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_55848852963e584ed4ae6b9_38078028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_55848852963e584ed4ae6b9_38078028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_26796032263e584ed4be060_93494436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_26796032263e584ed4be060_93494436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/aside_posts.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/post.css">
<?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_153730944363e584ed4bf154_95669253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_153730944363e584ed4bf154_95669253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="top">
<div class="content-post">
<?php $_smarty_tpl->_subTemplateRender("file:post/post.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<div class="aside">
<?php $_smarty_tpl->_subTemplateRender("file:aside_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</section>
<?php
}
}
/* {/block "body"} */
}
