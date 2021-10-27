<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:47:08
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\six\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157895796185cae3753-46878160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb6f817bd2ca4233a9ebc5ad2f1b90f43e5bc05' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\six\\login.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157895796185cae3753-46878160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'incorrect' => 0,
    'verificationId' => 0,
    'transientDataName' => 0,
    'ssoredirect' => 0,
    'systemsslurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5796185cb8b6d8_22249390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5796185cb8b6d8_22249390')) {function content_5796185cb8b6d8_22249390($_smarty_tpl) {?><div class="logincontainer">

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['login'],'desc'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['restrictedpage'])), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['incorrect']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['loginincorrect'],'textcenter'=>true), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['verificationId']->value&&empty($_smarty_tpl->tpl_vars['transientDataName']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['verificationKeyExpired'],'textcenter'=>true), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['ssoredirect']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['sso']['redirectafterlogin'],'textcenter'=>true), 0);?>

    <?php }?>

    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
dologin.php" role="form">
        <div class="form-group">
            <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
            <input type="email" name="username" class="form-control" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
" autofocus>
        </div>

        <div class="form-group">
            <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
" autocomplete="off" >
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="rememberme" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>

            </label>
        </div>

        <div align="center">
            <input id="login" type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
" /> <a href="pwreset.php" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a>
        </div>
    </form>

</div>
<?php }} ?>
