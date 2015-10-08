<?php /* Smarty version Smarty-3.1.18, created on 2015-10-03 23:34:46
         compiled from "views\searchres.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31855561031267377d8-29592519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f2841cb848396c0ae9f703f74c18616b5b2d1ee' => 
    array (
      0 => 'views\\searchres.tpl',
      1 => 1443908007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31855561031267377d8-29592519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56103126949b86_44527996',
  'variables' => 
  array (
    'searchval' => 0,
    'result' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56103126949b86_44527996')) {function content_56103126949b86_44527996($_smarty_tpl) {?><section>
<h1 id="searchval"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['searchval']->value, 'UTF-8');?>
</h1>
<?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>

<div class="article" style="background-image:url(img/<?php echo $_smarty_tpl->tpl_vars['newsItem']->value['image'];?>
); background-repeat:no-repeat; background-size:cover;">
<h1 class="articletitle"><?php echo ucfirst($_smarty_tpl->tpl_vars['newsItem']->value['title']);?>
</h1>
<p class="articletext"><b><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content'];?>
</b></p>
</div>

<?php } ?>
</section>
<?php }} ?>
