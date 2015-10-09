<?php /* Smarty version Smarty-3.1.18, created on 2015-10-03 13:23:32
         compiled from "views\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323415609262976c352-65856487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77071f33a1748818100a14fe29d4f1d5e4d849b3' => 
    array (
      0 => 'views\\pagination.tpl',
      1 => 1443871408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323415609262976c352-65856487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56092629773161_82538953',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56092629773161_82538953')) {function content_56092629773161_82538953($_smarty_tpl) {?><ul id="pagination">
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
