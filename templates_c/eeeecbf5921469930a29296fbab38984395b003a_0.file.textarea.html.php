<?php
/* Smarty version 4.3.0, created on 2023-02-04 19:12:53
  from '/storage/emulated/0/htdocs/Stlabfor1/templates/publicar/textarea.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dea02513f6a2_84739285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeeecbf5921469930a29296fbab38984395b003a' => 
    array (
      0 => '/storage/emulated/0/htdocs/Stlabfor1/templates/publicar/textarea.html',
      1 => 1675534370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dea02513f6a2_84739285 (Smarty_Internal_Template $_smarty_tpl) {
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
