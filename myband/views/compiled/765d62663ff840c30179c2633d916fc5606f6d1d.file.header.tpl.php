<?php /* Smarty version Smarty-3.1.18, created on 2015-10-02 23:15:30
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:562555f7ce5e5b9bb6-72694965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1443820529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562555f7ce5e5b9bb6-72694965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f7ce5e613d39_59874123',
  'variables' => 
  array (
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7ce5e613d39_59874123')) {function content_55f7ce5e613d39_59874123($_smarty_tpl) {?>
<header id="header">
	<a href="?page=Home">
	<img src="	img/grw-logo_206277.png" id="image" />
	</a>
	<h1 id="location" class="linktext"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['location']->value, 'UTF-8');?>
</h1>
	<div class="line">
	</div>
</header>
<div id="margin"></div>
<?php }} ?>
