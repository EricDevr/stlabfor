<?php
/* Smarty version 4.3.0, created on 2023-02-02 09:58:23
  from '/storage/emulated/0/htdocs/stlabfor/templates/publicar/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63db7b2f541bd4_41962799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8cf76761b804c986453ffe7a1d460fd2ed051b4' => 
    array (
      0 => '/storage/emulated/0/htdocs/stlabfor/templates/publicar/index.html',
      1 => 1675328209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:publicar/form.html' => 1,
  ),
),false)) {
function content_63db7b2f541bd4_41962799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134329169063db7b2f52cbe3_04467040', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24741564463db7b2f52ea61_09509549', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100138590063db7b2f538164_07282665', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126685399063db7b2f541199_46457311', "js");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_134329169063db7b2f52cbe3_04467040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_134329169063db7b2f52cbe3_04467040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
publicar<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_24741564463db7b2f52ea61_09509549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_24741564463db7b2f52ea61_09509549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['URLBASE']->value;?>
/static/css/publicar.css">
<?php
}
}
/* {/block "css"} */
/* {block "body"} */
class Block_100138590063db7b2f538164_07282665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_100138590063db7b2f538164_07282665',
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
class Block_126685399063db7b2f541199_46457311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_126685399063db7b2f541199_46457311',
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
