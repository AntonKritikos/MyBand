<?php /* Smarty version Smarty-3.1.18, created on 2015-10-03 22:23:57
         compiled from "views\background.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302560e5c27adb4b9-55532575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349a125b62b98dba9da0361275e3941b9e25c23c' => 
    array (
      0 => 'views\\background.tpl',
      1 => 1443903832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302560e5c27adb4b9-55532575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560e5c27b511d8_93109819',
  'variables' => 
  array (
    'background' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560e5c27b511d8_93109819')) {function content_560e5c27b511d8_93109819($_smarty_tpl) {?>		<style>
		body
		{
			<?php if ($_smarty_tpl->tpl_vars['background']->value=='Overview'||$_smarty_tpl->tpl_vars['background']->value=='Search') {?>
				overflow:scroll;
			<?php } else { ?>
				overflow:hidden;
			<?php }?>
				background-image:url("img/<?php echo $_smarty_tpl->tpl_vars['background']->value;?>
.png");
    		background-repeat: no-repeat;
    		background-size: cover;
		}
		</style>
<?php }} ?>
