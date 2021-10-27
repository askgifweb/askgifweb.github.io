<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:43:45
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\six\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1353457961791bc9ed3-37535551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '991ee1b19b17f1b169e28b29061bba7005ae5167' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\six\\footer.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1353457961791bc9ed3-37535551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inShoppingCart' => 0,
    'secondarySidebar' => 0,
    'date_year' => 0,
    'companyname' => 0,
    'BASE_PATH_JS' => 0,
    'token' => 0,
    'mdeLocale' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'footeroutput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57961791d120d1_02289970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57961791d120d1_02289970')) {function content_57961791d120d1_02289970($_smarty_tpl) {?>
        </div><!-- /.main-content -->
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0);?>

            </div>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</section>

<section id="footer">

    <p>Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. All Rights Reserved.</p>

</section>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.title"),$_smarty_tpl);?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo WHMCS\Smarty::langFunction(array('key'=>"locale"),$_smarty_tpl);
} else { ?>en_GB<?php }?>',
        saved = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saved"),$_smarty_tpl);?>
',
        saving = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saving"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/AjaxModal.js"><?php echo '</script'; ?>
>

<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }} ?>
