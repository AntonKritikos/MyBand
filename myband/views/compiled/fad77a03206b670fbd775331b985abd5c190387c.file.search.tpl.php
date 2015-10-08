<?php /* Smarty version Smarty-3.1.18, created on 2015-10-05 06:30:45
         compiled from "views/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1714076256561100a0733289-08846255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad77a03206b670fbd775331b985abd5c190387c' => 
    array (
      0 => 'views/search.tpl',
      1 => 1443989044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1714076256561100a0733289-08846255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561100a079b9a7_26074540',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561100a079b9a7_26074540')) {function content_561100a079b9a7_26074540($_smarty_tpl) {?><form method="post" action="?page=Search" id="searchform">
  <input type="text" name="searchval" id="searchtext" placeholder="Type what you are searching for."/>
  <input type="submit" name="submit" value="SEARCH" id="searchsubmit"/>
</form>
<?php }} ?>
