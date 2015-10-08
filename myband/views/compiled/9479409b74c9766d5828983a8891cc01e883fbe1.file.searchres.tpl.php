<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 18:28:35
         compiled from "views/searchres.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1991820708561156c5658695-05989448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9479409b74c9766d5828983a8891cc01e883fbe1' => 
    array (
      0 => 'views/searchres.tpl',
      1 => 1443983277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1991820708561156c5658695-05989448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561156c5682768_11344411',
  'variables' => 
  array (
    'searchval' => 0,
    'result' => 0,
    'newsItem' => 0,
    'searched' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561156c5682768_11344411')) {function content_561156c5682768_11344411($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['searchval']->value)) {?>
<h1 id="searchval"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['searchval']->value, 'UTF-8');?>
</h1>
<?php }?>
<section style="width:100%; height:100%;">
<?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>

<div class="article searcharticle" style="background-image:url(img/<?php echo $_smarty_tpl->tpl_vars['newsItem']->value['image'];?>
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
<?php if ($_smarty_tpl->tpl_vars['searched']->value<4) {?>
<style>
    body
    {
        overflow:hidden;
    }
</style>
<?php }?>
</section>
<div id="searchbuffer">
</div><?php }} ?>
