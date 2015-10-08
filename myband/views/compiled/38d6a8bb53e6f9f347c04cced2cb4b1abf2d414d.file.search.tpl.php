<?php /* Smarty version Smarty-3.1.18, created on 2015-10-03 23:12:54
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17172560fc3d00a2976-52225247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1443906772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17172560fc3d00a2976-52225247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560fc3d0104a11_81390587',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560fc3d0104a11_81390587')) {function content_560fc3d0104a11_81390587($_smarty_tpl) {?>
<form method="post" action="?page=Search" id="searchform">
  <input type="text" name="searchval" id="searchtext" placeholder="Type what you are searching for."/>
  <input type="submit" name="submit" value="SEARCH" id="searchsubmit"/>
</form>
<?php }} ?>
