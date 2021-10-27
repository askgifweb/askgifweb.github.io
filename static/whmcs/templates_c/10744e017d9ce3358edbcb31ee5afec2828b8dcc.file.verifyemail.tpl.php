<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:43:45
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\six\includes\verifyemail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1948157961791a47357-26279327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10744e017d9ce3358edbcb31ee5afec2828b8dcc' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\six\\includes\\verifyemail.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1948157961791a47357-26279327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emailVerificationIdValid' => 0,
    'LANG' => 0,
    'emailVerificationPending' => 0,
    'showingLoginPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57961791aa10d0_50457387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57961791aa10d0_50457387')) {function content_57961791aa10d0_50457387($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value) {?>
    <div class="email-verification alert-success">
        <div class="container">
            <i class="fa fa-check"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailAddressVerified'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value===false) {?>
    <div class="email-verification alert-danger">
        <div class="container">
            <i class="fa fa-times-circle"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailKeyExpired'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationPending']->value&&!$_smarty_tpl->tpl_vars['showingLoginPage']->value) {?>
    <div class="email-verification alert-warning">
        <div class="container">
            <i class="fa fa-warning"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php }?>
<?php }} ?>
