<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:44:18
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\six\domainchecker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10171579617b264bad4-04946079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d424d1d120130514553883a4495373e8fd813fc' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\six\\domainchecker.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10171579617b264bad4-04946079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'errorMsg' => 0,
    'bulkdomainsearchenabled' => 0,
    'domain' => 0,
    'performingLookup' => 0,
    'loggedin' => 0,
    'currencies' => 0,
    'curr' => 0,
    'currency' => 0,
    'BASE_PATH_IMG' => 0,
    'tldcategories' => 0,
    'tldCategory' => 0,
    'tld' => 0,
    'tldpricing' => 0,
    'tldpricelist' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_579617b29fcfd5_60037329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579617b29fcfd5_60037329')) {function content_579617b29fcfd5_60037329($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"danger",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['searchtermrequired']),'textcenter'=>true,'idname'=>"searchTermRequired",'additionalClasses'=>"domain-checker-error",'hide'=>true), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"danger",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['invalidchars']),'textcenter'=>true,'idname'=>"invalidChars",'additionalClasses'=>"domain-checker-error",'hide'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['errorMsg']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"danger",'msg'=>$_smarty_tpl->tpl_vars['errorMsg']->value,'textcenter'=>true,'idname'=>"invalidDomainError",'additionalClasses'=>"domain-checker-error"), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"danger",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['unabletolookup']),'textcenter'=>true,'idname'=>"invalidDomainError",'additionalClasses'=>"domain-checker-error",'hide'=>true), 0);?>

<?php }?>

<div class="domain-checker-container">
    <div class="domain-checker-bg clearfix">
        <form id="frmDomainChecker">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                    <?php if ($_smarty_tpl->tpl_vars['bulkdomainsearchenabled']->value) {?>
                        <div class="domain-bulk-options-box hidden-xs">
                            <a href="domainchecker.php?search=bulk" id="btnBulkOptions" class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bulkoptions'];?>
</a>
                        </div>
                    <?php }?>
                    <div class="input-group input-group-lg input-group-box">
                        <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" id="inputDomain" />
                        <span class="input-group-btn">
                            <button type="submit" id="btnCheckAvailability" class="btn btn-primary domain-check-availability"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</button>
                        </span>
                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </form>
    </div>
</div>
<div class="domain-step-options hidden" id="stepBulkOptions">
    <textarea class="form-control" rows="10" cols="60" id="inputBulkDomains"></textarea>
</div>
<div class="domain-step-options<?php if (!$_smarty_tpl->tpl_vars['performingLookup']->value) {?> hidden<?php }?>" id="stepResults">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/domainchecker-results.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['currencies']->value&&!$_smarty_tpl->tpl_vars['performingLookup']->value) {?>
    <div class="currencychooser pull-right clearfix margin-bottom">
        <div class="btn-group" role="group">
            <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
                <a href="domainchecker.php?currency=<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['currency']->value['id']==$_smarty_tpl->tpl_vars['curr']->value['id']) {?> active<?php }?>">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/flags/<?php if ($_smarty_tpl->tpl_vars['curr']->value['code']=="AUD") {?>au<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="CAD") {?>ca<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="EUR") {?>eu<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="GBP") {?>gb<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="INR") {?>in<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="JPY") {?>jp<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="USD") {?>us<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="ZAR") {?>za<?php } else { ?>na<?php }?>.png" border="0" alt="" />
                    <?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>

                </a>
            <?php } ?>
        </div>
    </div>
    <div class="clearfix"></div>
<?php }?>

<div id="pricingTable"<?php if ($_smarty_tpl->tpl_vars['performingLookup']->value) {?> class="hidden"<?php }?>>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php  $_smarty_tpl->tpl_vars['tldCategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tldCategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tldcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tldCategory']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tldCategory']->key => $_smarty_tpl->tpl_vars['tldCategory']->value) {
$_smarty_tpl->tpl_vars['tldCategory']->_loop = true;
 $_smarty_tpl->tpl_vars['tldCategory']->index++;
 $_smarty_tpl->tpl_vars['tldCategory']->first = $_smarty_tpl->tpl_vars['tldCategory']->index === 0;
?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['tldCategory']->first) {?>true<?php } else { ?>false<?php }?>" aria-controls="collapse<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
" class="domain-tld-pricing-category">
                            <?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->category;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['tldpricing'];?>

                        </a>
                    </h4>
                </div>
                <div id="collapse<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
" class="panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['tldCategory']->first) {?> in<?php }?>" role="tabpanel" aria-labelledby="heading<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 table-responsive domain-tld-pricing-table-responsive">
                                <table class="table table-striped table-framed">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaintld'];?>
</th>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainminyears'];?>
</th>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsregister'];?>
</th>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
</th>
                                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsrenew'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['tld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tldCategory']->value->topLevelDomains; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tld']->key => $_smarty_tpl->tpl_vars['tld']->value) {
$_smarty_tpl->tpl_vars['tld']->_loop = true;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['tld']->value->tld;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['period'];?>
</td>
                                                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['register']) {
echo $_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['register'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['transfer']) {
echo $_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['transfer'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['renew']) {
echo $_smarty_tpl->tpl_vars['tldpricing']->value[$_smarty_tpl->tpl_vars['tld']->value->tld]['renew'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading<?php echo $_smarty_tpl->tpl_vars['tldCategory']->value->id;?>
">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseAll" aria-expanded="false" aria-controls="collapseAll" class="domain-tld-pricing-category">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['alltldpricing'];?>

                    </a>
                </h4>
            </div>
            <div id="collapseAll" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAll">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 table-responsive domain-tld-pricing-table-responsive">
                            <table class="table table-striped table-framed">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaintld'];?>
</th>
                                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainminyears'];?>
</th>
                                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsregister'];?>
</th>
                                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
</th>
                                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsrenew'];?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['tld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tldpricelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tld']->key => $_smarty_tpl->tpl_vars['tld']->value) {
$_smarty_tpl->tpl_vars['tld']->_loop = true;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['tld']->value['tld'];?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['tld']->value['period'];?>
</td>
                                            <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tld']->value['register']) {
echo $_smarty_tpl->tpl_vars['tld']->value['register'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                            <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tld']->value['transfer']) {
echo $_smarty_tpl->tpl_vars['tld']->value['transfer'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                            <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['tld']->value['renew']) {
echo $_smarty_tpl->tpl_vars['tld']->value['renew'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainregnotavailable'];
}?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['currencies']->value&&!$_smarty_tpl->tpl_vars['performingLookup']->value) {?>
    <div class="currencychooser pull-right clearfix margin-bottom">
        <div class="btn-group" role="group">
            <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
                <a href="domainchecker.php?currency=<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['currency']->value['id']==$_smarty_tpl->tpl_vars['curr']->value['id']) {?> active<?php }?>">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/flags/<?php if ($_smarty_tpl->tpl_vars['curr']->value['code']=="AUD") {?>au<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="CAD") {?>ca<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="EUR") {?>eu<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="GBP") {?>gb<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="INR") {?>in<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="JPY") {?>jp<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="USD") {?>us<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="ZAR") {?>za<?php } else { ?>na<?php }?>.png" border="0" alt="" />
                    <?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>

                </a>
            <?php } ?>
        </div>
    </div>
    <div class="clearfix"></div>
<?php }?>

<?php echo '<script'; ?>
>
var langSearch = '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
';
var langAdding = '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckeradding'];?>
';
var langAdded = '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckeradded'];?>
';
var langUnavailable = '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainunavailable'];?>
';
var langBulkPlaceholder = '<?php echo smarty_modifier_replace(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['LANG']->value['domaincheckerbulkplaceholder']),"\n",'\n');?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/domainchecker.js"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"CheckUnavailable",'title'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['domainchecker']['suggestiontakentitle']),'content'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['domainchecker']['suggestiontakenmsg']),'closeLabel'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['domainchecker']['suggestiontakenchooseanother'])), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"AlreadyInCart",'title'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['domainchecker']['alreadyincarttitle']),'content'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['domainchecker']['alreadyincartmsg']),'submitAction'=>"window.location='cart.php?a=checkout'",'submitLabel'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['domainchecker']['alreadyincartcheckoutnow'])), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"AddToCartError",'title'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['genericerror']['title']),'content'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['genericerror']['msg'])), 0);?>

<?php }} ?>
