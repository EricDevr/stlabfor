<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:10:26
  from 'C:\xampp\htdocs\stlabfor\templates\category\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e57d6267af45_21531525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4fe05ff025b8003c417697fcbf048bf983fdc3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\category\\index.html',
      1 => 1675984223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:category/posts.html' => 1,
  ),
),false)) {
function content_63e57d6267af45_21531525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83924219063e57d6266f308_68101201', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46254378363e57d62673f24_69818451', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181063259463e57d62674df5_99881017', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436849063e57d6267a654_24722769', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_83924219063e57d6266f308_68101201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_83924219063e57d6266f308_68101201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['TITLE']->value;
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_46254378363e57d62673f24_69818451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_46254378363e57d62673f24_69818451',
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
class Block_181063259463e57d62674df5_99881017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_181063259463e57d62674df5_99881017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:category/posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_1436849063e57d6267a654_24722769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_1436849063e57d6267a654_24722769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
