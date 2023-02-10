<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:34:05
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/category/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e582ed26cb02_55924777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ea6c2f5db34b5de8f07cfee5f675eae4fa7f67' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/category/index.html',
      1 => 1675985480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:category/posts.html' => 1,
  ),
),false)) {
function content_63e582ed26cb02_55924777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21032412863e582ed24f321_85294471', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179324353663e582ed25cd07_51882705', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56758240663e582ed25d896_88758765', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104995006163e582ed26c0e9_67892148', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_21032412863e582ed24f321_85294471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_21032412863e582ed24f321_85294471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['TITLE']->value;
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_179324353663e582ed25cd07_51882705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_179324353663e582ed25cd07_51882705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/category.css">
<?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_56758240663e582ed25d896_88758765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_56758240663e582ed25d896_88758765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:category/posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_104995006163e582ed26c0e9_67892148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_104995006163e582ed26c0e9_67892148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
