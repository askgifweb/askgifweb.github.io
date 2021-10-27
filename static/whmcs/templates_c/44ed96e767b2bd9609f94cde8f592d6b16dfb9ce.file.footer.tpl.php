<?php /* Smarty version Smarty-3.1.21, created on 2016-07-20 12:57:07
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\admin\templates\blend\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4879578f5903c48d15-40666745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ed96e767b2bd9609f94cde8f592d6b16dfb9ce' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\admin\\templates\\blend\\footer.tpl',
      1 => 1459250058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4879578f5903c48d15-40666745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'csrfToken' => 0,
    '_ADMINLANG' => 0,
    'admin_notes' => 0,
    'BASE_PATH_JS' => 0,
    'footeroutput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_578f5903cd1897_25723473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578f5903cd1897_25723473')) {function content_578f5903cd1897_25723473($_smarty_tpl) {?>
        </div>
        <div class="clear"></div>

    </div>

    <div class="clear"></div>

    <div class="footerbar clearfix">
        <div class="pull-left">
            <a href="#">
                <i class="fa fa-angle-double-up"></i>
                Top
            </a>
        </div>
        <div class="pull-right whmcs-link">
            Copyright &copy; <a href="http://www.whmcs.com/" target="_blank">WHMCompleteSolution</a>.  All Rights Reserved.
        </div>
    </div>

    <div class="intellisearch">
        <form id="frmintellisearch">
            <input type="hidden" name="intellisearch" value="1" />
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
            <input type="text" name="value" id="intellisearchval" />
            <input type="submit" style="display:none;">
        </form>
    </div>

    <div id="searchresults">
        <div id="searchresultsscroller"></div>
        <div class="close">
            <a href="#" onclick="searchclose();return false">
                <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['close'];?>

                <img src="images/delete.gif" width="16" height="16" border="0" align="top" />
            </a>
        </div>
    </div>

    <div id="greyout"></div>

<form id="frmmynotes">
    <input type="hidden" name="action" value="savenotes" />
    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
    <div class="modal fade modal-my-notes" id="myNotes">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-warning">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</h4>
                </div>
                <div class="modal-body">
                    <textarea id="mynotesbox" name="notes" rows="12" class="form-control"><?php echo $_smarty_tpl->tpl_vars['admin_notes']->value;?>
</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['cancel'];?>
</button>
                    <button type="button" class="btn btn-primary" onclick="notesclose('1')"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['savechanges'];?>
</button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="modal whmcs-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
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
                <button id="modalAjaxClose" type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/lightbox.min.js"><?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }} ?>
