<?php /* Smarty version Smarty-3.1.18, created on 2015-10-05 11:18:24
         compiled from "views/background.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5547968585610fb5a585cd9-01091332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a761b397a4eeac585b5773e0d1202b1eeeecbd50' => 
    array (
      0 => 'views/background.tpl',
      1 => 1444043904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5547968585610fb5a585cd9-01091332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5610fb5a5ac515_76058001',
  'variables' => 
  array (
    'background' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5610fb5a5ac515_76058001')) {function content_5610fb5a5ac515_76058001($_smarty_tpl) {?>		<style>
		body
		{
			<?php if ($_smarty_tpl->tpl_vars['background']->value=='Overview'||$_smarty_tpl->tpl_vars['background']->value=='Search') {?>
				overflow-y:auto;
			<?php } else { ?>
				overflow:hidden;
			<?php }?>
			background-image:url("img/<?php echo $_smarty_tpl->tpl_vars['background']->value;?>
.png");
    		background-repeat: no-repeat;
    		background-attachment:fixed;
    		background-size: cover;
		}
		</style>
<?php }} ?>
