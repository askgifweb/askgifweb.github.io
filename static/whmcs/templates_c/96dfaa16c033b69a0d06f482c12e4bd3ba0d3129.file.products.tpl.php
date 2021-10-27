<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:46:49
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\orderforms\standard_cart\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140525796184999b555-27680108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96dfaa16c033b69a0d06f482c12e4bd3ba0d3129' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\orderforms\\standard_cart\\products.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140525796184999b555-27680108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productGroup' => 0,
    'errormessage' => 0,
    'products' => 0,
    'product' => 0,
    'LANG' => 0,
    'value' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57961849ac04d3_25633834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57961849ac04d3_25633834')) {function content_57961849ac04d3_25633834($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1>
                    <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['headline']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['headline'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['productGroup']->value['name'];?>

                    <?php }?>
                </h1>
                <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['tagline']) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['productGroup']->value['tagline'];?>
</p>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                </div>
            <?php }?>
        </div>

        <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">
            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        <div class="col-md-9 pull-md-right">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <div class="products" id="products">
                <div class="row row-eq-height">
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
                        <div class="col-md-6">
                            <div class="product clearfix" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
">
                                <header>
                                    <span id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['qty']) {?>
                                        <span class="qty">
                                            <?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>

                                        </span>
                                    <?php }?>
                                </header>
                                <div class="product-desc">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['featuresdesc']) {?>
                                        <p id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-description">
                                            <?php echo $_smarty_tpl->tpl_vars['product']->value['featuresdesc'];?>

                                        </p>
                                    <?php }?>
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['feature']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
                                            <li id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
                                                <span class="feature-value"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
                                                <?php echo $_smarty_tpl->tpl_vars['feature']->value;?>

                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <footer>
                                    <div class="product-pricing" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-price">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>
<br />
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>
                                                <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['displayprice'];?>
</span>
                                            <?php }?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['hasconfigoptions']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingfrom'];?>

                                                <br />
                                            <?php }?>
                                            <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price'];?>
</span>
                                            <br />
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="monthly") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="quarterly") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="semiannually") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="annually") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="biennially") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="triennially") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                                            <?php }?>
                                        <?php }?>
                                    </div>
                                    <a href="cart.php?a=add&<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>bid=<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else { ?>pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>" class="btn btn-success btn-sm" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-order-button">
                                        <i class="fa fa-shopping-cart"></i>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                    </a>
                                </footer>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['product']->iteration%2==0) {?>
                            </div>
                            <div class="row row-eq-height">
                        <?php }?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
