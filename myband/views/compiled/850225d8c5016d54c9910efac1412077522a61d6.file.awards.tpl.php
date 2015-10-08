<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 20:04:12
         compiled from "views/awards.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163321884156114c9b553e65-99540704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850225d8c5016d54c9910efac1412077522a61d6' => 
    array (
      0 => 'views/awards.tpl',
      1 => 1444248187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163321884156114c9b553e65-99540704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56114c9b55b264_14600655',
  'variables' => 
  array (
    'result' => 0,
    'award' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56114c9b55b264_14600655')) {function content_56114c9b55b264_14600655($_smarty_tpl) {?><div id="awards">
    <div id="awardheader">
        <h1 id="awardtitle">E3 AWARDS</h1> 
    </div>
    <div id"awardschild">
        <?php  $_smarty_tpl->tpl_vars['award'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['award']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['award']->key => $_smarty_tpl->tpl_vars['award']->value) {
$_smarty_tpl->tpl_vars['award']->_loop = true;
?>
        <h2 class="subtitle"><?php echo $_smarty_tpl->tpl_vars['award']->value['title'];?>
</h2>
        <?php echo $_smarty_tpl->tpl_vars['award']->value['awards'];?>

        <?php } ?>
    </div>
</div><?php }} ?>
