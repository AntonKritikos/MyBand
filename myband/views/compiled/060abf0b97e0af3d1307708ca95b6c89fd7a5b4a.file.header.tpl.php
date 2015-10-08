<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 17:35:33
         compiled from "views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13958995345610fb5a564965-44515805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060abf0b97e0af3d1307708ca95b6c89fd7a5b4a' => 
    array (
      0 => 'views/header.tpl',
      1 => 1443980117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13958995345610fb5a564965-44515805',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5610fb5a5756b0_99734767',
  'variables' => 
  array (
    'location' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5610fb5a5756b0_99734767')) {function content_5610fb5a5756b0_99734767($_smarty_tpl) {?>
<header id="header">
	<div id="homepic">
		<a href="?page=Home" >
			<img src="	img/grw-logo_206277.png" id="image" />
		</a>
	</div>
	<div id="localnav">
		<a id='home' class="linktext" href="?page=Home">HOME</a>
		<?php if ($_smarty_tpl->tpl_vars['location']->value!='Home') {?>
			<div id='breaker'><h1 id="greater">></h1></div>
			<a id="location" class="linktext" href="?page=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['location']->value, 'UTF-8');?>
</a>
		<?php }?>
	</div>
	<div class="line">
	</div>
</header>
<div id="margin"></div>
<?php }} ?>
