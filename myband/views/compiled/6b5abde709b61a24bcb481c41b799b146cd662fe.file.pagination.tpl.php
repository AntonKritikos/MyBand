<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 10:34:26
         compiled from "views/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:503532267561100b2137801-41120379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5abde709b61a24bcb481c41b799b146cd662fe' => 
    array (
      0 => 'views/pagination.tpl',
      1 => 1443952816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503532267561100b2137801-41120379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561100b2167939_28710947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561100b2167939_28710947')) {function content_561100b2167939_28710947($_smarty_tpl) {?><ul id="pagination">
  <h1 id="paginationtext">PAGE</h1>
  <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  <li class="links">
    <a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&number=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="page<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
  </li>
  <?php }} ?>
</ul>
<?php }} ?>
