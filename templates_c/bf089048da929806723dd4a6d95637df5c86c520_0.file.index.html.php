<?php
/* Smarty version 4.3.0, created on 2023-02-04 18:03:53
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/publicar/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63de8ff9406251_27453871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf089048da929806723dd4a6d95637df5c86c520' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/publicar/index.html',
      1 => 1675530187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publicar/form.html' => 1,
  ),
),false)) {
function content_63de8ff9406251_27453871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214403976863de8ff93fadd6_21884194', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161560390863de8ff93fc613_84616682', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64658334863de8ff94010b9_64771810', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186348811463de8ff9405823_07358828', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_214403976863de8ff93fadd6_21884194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_214403976863de8ff93fadd6_21884194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
publicar<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_161560390863de8ff93fc613_84616682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_161560390863de8ff93fc613_84616682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/publicar.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/textarea.css">
<?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_64658334863de8ff94010b9_64771810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_64658334863de8ff94010b9_64771810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="publicar-cont">
<?php $_smarty_tpl->_subTemplateRender("file:publicar/form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section>
<?php
}
}
/* {/block "body"} */
/* {block "js"} */
class Block_186348811463de8ff9405823_07358828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_186348811463de8ff9405823_07358828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/js/publicar.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
}
