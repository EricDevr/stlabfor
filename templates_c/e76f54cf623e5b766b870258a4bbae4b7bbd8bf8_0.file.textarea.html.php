<?php
/* Smarty version 4.3.0, created on 2023-02-09 23:43:06
  from 'C:\xampp\htdocs\stlabfor\templates\publicar\textarea.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e576fa85ec37_48836806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e76f54cf623e5b766b870258a4bbae4b7bbd8bf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stlabfor\\templates\\publicar\\textarea.html',
      1 => 1675537945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e576fa85ec37_48836806 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bcod">
<span class="bbcode">
<a href="javascript:insert_bbcode('b')" class="items"><b>b</b></a>
<a href="javascript:insert_bbcode('i')" class="items"><i>i</i></a>
<a href="javascript:insert_bbcode('u')" class="items"><u>u</u></a>
<a href="javascript:insert_bbcode('h2')" class="items">T</a>

<div class="form-subir">
<input type="file" name="file" id="file">
<input type="text" name="title-file" id="title-file" placeholder="nombre del archivo">
<button type="button" onclick="upload_image()">imagen</button>
<button type="button" onclick="upload_video()">video</button>
</div>

</span>
<textarea name="content" placeholder="contenido"></textarea>
</div><?php }
}
