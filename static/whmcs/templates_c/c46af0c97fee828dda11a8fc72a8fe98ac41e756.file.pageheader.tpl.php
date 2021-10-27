<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:44:18
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\six\includes\pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7605579617b2096bd3-19067506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c46af0c97fee828dda11a8fc72a8fe98ac41e756' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\six\\includes\\pageheader.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7605579617b2096bd3-19067506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'desc' => 0,
    'showbreadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_579617b20d9259_76255928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579617b20d9259_76255928')) {function content_579617b20d9259_76255928($_smarty_tpl) {?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
</div>
<?php }} ?>
