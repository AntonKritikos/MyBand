<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 20:45:00
         compiled from "views/interview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72610064156157f750707f4-66236023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '653f0b14dc614c05998c7dac46ec7ab4adcf70a4' => 
    array (
      0 => 'views/interview.tpl',
      1 => 1444250656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72610064156157f750707f4-66236023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56157f750a4943_05153070',
  'variables' => 
  array (
    'result' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56157f750a4943_05153070')) {function content_56157f750a4943_05153070($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>

<div class="article" style="background-image:url(img/Home.png); background-repeat:no-repeat; background-size:cover;">
<h1 class="inttitle linktext"><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['question'];?>
</h1>
<p class="inttext"><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['answer'];?>
</p>
</div>

<?php } ?><?php }} ?>
