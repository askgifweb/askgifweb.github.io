<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:44:18
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\six\domainchecker-results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24625579617b2e890d5-06219331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19cfa87bf1ece7a3c831d8b1928166255ac51419' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\six\\domainchecker-results.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24625579617b2e890d5-06219331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'validDomain' => 0,
    'searchResults' => 0,
    'LANG' => 0,
    'bulkCheckResults' => 0,
    'years' => 0,
    'price' => 0,
    'result' => 0,
    'searchingFor' => 0,
    'i' => 0,
    'moreSuggestionsAvailable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_579617b31041d9_65896512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579617b31041d9_65896512')) {function content_579617b31041d9_65896512($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['validDomain']->value) {?>

    <?php if ($_smarty_tpl->tpl_vars['searchResults']->value) {?>
        <div class="domain-checker-result-headline">
            <?php if ($_smarty_tpl->tpl_vars['searchResults']->value['isRegistered']) {?>
                <p class="domain-checker-unavailable">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainunavailable1'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['searchResults']->value['domainName'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainunavailable2'];?>

                </p>
            <?php } elseif ($_smarty_tpl->tpl_vars['searchResults']->value['status']=='reserved') {?>
                <p class="domain-checker-available">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreserved1'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['searchResults']->value['domainName'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreserved2'];?>

                </p>
            <?php } else { ?>
                <p class="domain-checker-available">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable1'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['searchResults']->value['domainName'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable2'];?>

                </p>
            <?php }?>
        </div>
    <?php }?>

    <?php if (($_smarty_tpl->tpl_vars['searchResults']->value&&!$_smarty_tpl->tpl_vars['searchResults']->value['isRegistered'])||$_smarty_tpl->tpl_vars['bulkCheckResults']->value) {?>

        <div class="domainresults" id="primarySearchResults">
            <div id="btnCheckout" class="domain-checkout-area">
                <a href="cart.php?a=view" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsgotocheckout'];?>
 &raquo;</a>
            </div>
            <div>
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainssearchresults'];?>

            </div>
            <table class="table table-curved table-hover" id="searchResults">
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['searchResults']->value) {?>
                        <tr>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['searchResults']->value['domainName'];?>
</strong></td>
                            <td class="text-center">
                                <?php if ($_smarty_tpl->tpl_vars['searchResults']->value['status']=='reserved') {?>
                                    <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreserved'];?>
</span>
                                <?php } else { ?>
                                    <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckeravailable'];?>
</span>
                                <?php }?>
                            </td>
                            <td class="text-center">
                                <?php echo $_smarty_tpl->tpl_vars['searchResults']->value['shortestPeriod']['register'];?>

                            </td>
                            <td class="text-center">
                                <?php if (count($_smarty_tpl->tpl_vars['searchResults']->value['pricing'])==1) {?>
                                    <button type="button" onclick="addToCart(this, false, 'register')" class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-shopping-cart"></span>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                    </button>
                                <?php } else { ?>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm" onclick="addToCart(this, false, 'register')">
                                            <b class="glyphicon glyphicon-shopping-cart"></b>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle additional-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <b class="caret"></b>
                                            <span class="sr-only">
                                                <?php echo WHMCS\Smarty::langFunction(array('key'=>"domainChecker.additionalPricingOptions",'domain'=>$_smarty_tpl->tpl_vars['searchResults']->value['domainName']),$_smarty_tpl);?>

                                            </span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <?php  $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price']->_loop = false;
 $_smarty_tpl->tpl_vars['years'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['searchResults']->value['pricing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['price']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['price']->key => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->_loop = true;
 $_smarty_tpl->tpl_vars['years']->value = $_smarty_tpl->tpl_vars['price']->key;
 $_smarty_tpl->tpl_vars['price']->iteration++;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['price']->iteration==1) {?>
                                                    
                                                    <?php continue 1;?>
                                                <?php }?>
                                                <li>
                                                    <a onclick="addToCart(this, false, 'register', <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
);return false;">
                                                        <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>

                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php }?>
                            </td>
                        </tr>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bulkCheckResults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
                        <tr>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
</strong></td>
                            <td class="text-center">
                                <?php if ($_smarty_tpl->tpl_vars['searchingFor']->value=='register') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['result']->value['isAvailable']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['result']->value['status']=='reserved') {?>
                                            <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainreserved'];?>
</span>
                                        <?php } else { ?>
                                            <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckeravailable'];?>
</span>
                                        <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['isRegistered']) {?>
                                        <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                                    <?php } else { ?>
                                        <span class="label label-danger">Status Unknown</span>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['result']->value['isRegistered']) {?>
                                        <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertransferable'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['isAvailable']) {?>
                                        <span class="label label-danger">Not Registered</span>
                                    <?php } else { ?>
                                        <span class="label label-danger">Status Unknown</span>
                                    <?php }?>
                                <?php }?>
                            </td>
                            <td class="text-center">
                                <?php if (($_smarty_tpl->tpl_vars['searchingFor']->value=='register'&&$_smarty_tpl->tpl_vars['result']->value['isAvailable'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['result']->value['shortestPeriod']['register'];?>

                                <?php } elseif (($_smarty_tpl->tpl_vars['searchingFor']->value=='transfer'&&$_smarty_tpl->tpl_vars['result']->value['isRegistered'])) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['result']->value['shortestPeriod']['transfer'];?>

                                <?php }?>
                            </td>
                            <td class="text-right">
                                <?php if (($_smarty_tpl->tpl_vars['searchingFor']->value=='register'&&$_smarty_tpl->tpl_vars['result']->value['isAvailable'])) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['result']->value['pricing'])==1) {?>
                                        <button type="button" onclick="addToCart(this, false, 'register')" class="btn btn-primary btn-sm">
                                            <span class="glyphicon glyphicon-shopping-cart"></span>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                        </button>
                                    <?php } else { ?>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm" onclick="addToCart(this, false, 'register')">
                                                <b class="glyphicon glyphicon-shopping-cart"></b>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle additional-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <b class="caret"></b>
                                            <span class="sr-only">
                                                <?php echo WHMCS\Smarty::langFunction(array('key'=>"domainChecker.additionalPricingOptions",'domain'=>$_smarty_tpl->tpl_vars['result']->value['domainName']),$_smarty_tpl);?>

                                            </span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <?php  $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price']->_loop = false;
 $_smarty_tpl->tpl_vars['years'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value['pricing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['price']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['price']->key => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->_loop = true;
 $_smarty_tpl->tpl_vars['years']->value = $_smarty_tpl->tpl_vars['price']->key;
 $_smarty_tpl->tpl_vars['price']->iteration++;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['price']->iteration==1) {?>
                                                        
                                                        <?php continue 1;?>
                                                    <?php }?>
                                                    <li>
                                                        <a onclick="addToCart(this, false, 'register', <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
);return false;">
                                                            <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>

                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php }?>
                                <?php } elseif (($_smarty_tpl->tpl_vars['searchingFor']->value=='transfer'&&$_smarty_tpl->tpl_vars['result']->value['isRegistered'])) {?>
                                    <button type="button" onclick="addToCart(this, false, 'transfer')" class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-shopping-cart"></span>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                    </button>
                                <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['isRegistered']) {?>
                                    <a href="http://<?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
" target="_blank" class="btn btn-default btn-sm">www</a>
                                    <button type="button" onclick="viewWhois('<?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
')" class="btn btn-default btn-sm">WHOIS</button>
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['searchResults']->value&&count($_smarty_tpl->tpl_vars['searchResults']->value['suggestions'])>0) {?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="domainresults" id="suggestionSearchResults">
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainssuggestions'];?>
 <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsothersuggestions'];?>
</span>
                </div>
                <table class="table table-curved table-hover" id="suggestionResults">
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['searchResults']->value['suggestions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['result']->key;
?>
                            <tr<?php if ($_smarty_tpl->tpl_vars['i']->value>=10) {?> class="hidden"<?php }?>>
                                <td>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['result']->value['domainName'];?>
</strong>
                                </td>
                                <td class="text-center">
                                    <?php echo $_smarty_tpl->tpl_vars['result']->value['shortestPeriod']['register'];?>

                                </td>
                                <td class="text-right">
                                    <?php if (count($_smarty_tpl->tpl_vars['result']->value['pricing'])==1) {?>
                                        <button type="button" onclick="addToCart(this, true, 'register')" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-shopping-cart"></span>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                        </button>
                                    <?php } else { ?>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm" onclick="addToCart(this, true, 'register')">
                                                <b class="glyphicon glyphicon-shopping-cart"></b>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                            </button>
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle additional-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <b class="caret"></b>
                                            <span class="sr-only">
                                                <?php echo WHMCS\Smarty::langFunction(array('key'=>"domainChecker.additionalPricingOptions",'domain'=>$_smarty_tpl->tpl_vars['result']->value['domainName']),$_smarty_tpl);?>

                                            </span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <?php  $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price']->_loop = false;
 $_smarty_tpl->tpl_vars['years'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value['pricing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['price']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['price']->key => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->_loop = true;
 $_smarty_tpl->tpl_vars['years']->value = $_smarty_tpl->tpl_vars['price']->key;
 $_smarty_tpl->tpl_vars['price']->iteration++;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['price']->iteration==1) {?>
                                                        
                                                        <?php continue 1;?>
                                                    <?php }?>
                                                    <li>
                                                        <a onclick="addToCart(this, true, 'register', <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
);return false;">
                                                            <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>

                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr id="trNoMoreSuggestions" class="hidden">
                            <td colspan="3" class="text-muted text-center">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckernomoresuggestions'];?>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['moreSuggestionsAvailable']->value) {?>
                <p class="text-center">
                    <a href="#" class="btn btn-link" id="btnMoreSuggestions" onclick="showMoreSuggestions();return false"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainsmoresuggestions'];?>
</a>
                </p>
            <?php }?>
            <div class="domain-disclaimer-area">
                <p class="text-muted"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['disclaimers'];?>
</strong><br /><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainssuggestionswarnings'];?>
</p>
            </div>
        </div>
    </div>

<?php }?>
<?php }} ?>
