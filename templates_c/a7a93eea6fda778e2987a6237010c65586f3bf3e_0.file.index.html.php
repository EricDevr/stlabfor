<?php
/* Smarty version 4.3.0, created on 2023-02-04 19:57:49
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/post/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63deaaadbb0eb5_05558967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a93eea6fda778e2987a6237010c65586f3bf3e' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/post/index.html',
      1 => 1675537053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post/post.html' => 1,
    'file:aside_posts.html' => 1,
  ),
),false)) {
function content_63deaaadbb0eb5_05558967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113952690763deaaadba1eb7_31593193', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57741308363deaaadba4014_80257910', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157106475563deaaadbaaa35_88535852', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_113952690763deaaadba1eb7_31593193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_113952690763deaaadba1eb7_31593193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_57741308363deaaadba4014_80257910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_57741308363deaaadba4014_80257910',
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
class Block_157106475563deaaadbaaa35_88535852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_157106475563deaaadbaaa35_88535852',
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
