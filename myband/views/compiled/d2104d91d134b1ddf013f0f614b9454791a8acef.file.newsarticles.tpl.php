<?php /* Smarty version Smarty-3.1.18, created on 2015-10-03 12:25:05
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2681155ffea8e175918-28289209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1443867867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2681155ffea8e175918-28289209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ffea8e2dc801_04234593',
  'variables' => 
  array (
    'result' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffea8e2dc801_04234593')) {function content_55ffea8e2dc801_04234593($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>

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
