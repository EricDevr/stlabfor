<?php
/* Smarty version 4.3.0, created on 2023-02-10 00:12:09
  from 'C:\xampp\htdocs\stlabfor\templates\post\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e57dc9252967_85105140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd558831182c00fd4e6d4c2154efb9bcc2cf13608' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\post\\index.html',
      1 => 1675984327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:post/post.html' => 1,
    'file:aside_posts.html' => 1,
  ),
),false)) {
function content_63e57dc9252967_85105140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190651324263e57dc9247c93_17920911', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32028931063e57dc924cc31_71219586', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193819255663e57dc924dc59_61024821', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.temp.html");
}
/* {block "title"} */
class Block_190651324263e57dc9247c93_17920911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_190651324263e57dc9247c93_17920911',
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
class Block_32028931063e57dc924cc31_71219586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_32028931063e57dc924cc31_71219586',
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
class Block_193819255663e57dc924dc59_61024821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_193819255663e57dc924dc59_61024821',
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
