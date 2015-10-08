<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 14:28:09
         compiled from "views/newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810652635561100b2091990-62719080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1443968887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810652635561100b2091990-62719080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561100b2131df4_61501487',
  'variables' => 
  array (
    'result' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561100b2131df4_61501487')) {function content_561100b2131df4_61501487($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>

<?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>

<div class="article" style="background-image:url(img/<?php echo $_smarty_tpl->tpl_vars['newsItem']->value['image'];?>
); background-repeat:no-repeat; background-size:cover;">
<h1 class="articletitle linktext"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['newsItem']->value['title'], 'UTF-8');?>
</h1>
<p class="articletext"><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content'];?>
</p>
<p class="articletext"><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content2'];?>
</p>
<p class="articletext"><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content3'];?>
</p>
<p class="articletext"><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content4'];?>
</p>
</div>

<?php } ?>
</section>
<?php }} ?>
