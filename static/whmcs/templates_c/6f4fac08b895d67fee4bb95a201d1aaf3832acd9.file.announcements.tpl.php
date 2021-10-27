<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:46:16
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\six\announcements.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31631579618287a36d7-68527569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f4fac08b895d67fee4bb95a201d1aaf3832acd9' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\six\\announcements.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31631579618287a36d7-68527569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'announcementsFbRecommend' => 0,
    'LANG' => 0,
    'announcements' => 0,
    'announcement' => 0,
    'seofriendlyurls' => 0,
    'WEB_ROOT' => 0,
    'systemurl' => 0,
    'prevpage' => 0,
    'nextpage' => 0,
    'view' => 0,
    'pagenumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_579618288cc4d9_55185440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579618288cc4d9_55185440')) {function content_579618288cc4d9_55185440($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
    <?php echo '<script'; ?>
>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['locale'];?>
/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    <?php echo '</script'; ?>
>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?>

    <div class="announcement-single">

        <h2>
            <span class="label label-default">
                <?php echo date("M jS",$_smarty_tpl->tpl_vars['announcement']->value['timestamp']);?>

            </span>
            <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else {
echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</a>
        </h2>

        <blockquote>
            <p><?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text']))<350) {
echo $_smarty_tpl->tpl_vars['announcement']->value['text'];
} else {
echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>

            <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else {
echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
 &raquo;</a>
            <?php }?></p>
        </blockquote>

        <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
            <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
            <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
        <?php }?>

    </div>

<?php }
if (!$_smarty_tpl->tpl_vars['announcement']->_loop) {
?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['noannouncements']),'textcenter'=>true), 0);?>


<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['prevpage']->value||$_smarty_tpl->tpl_vars['nextpage']->value) {?>

    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <form class="form-inline" role="form">
            <div class="form-group">
                <div class="input-group">
                    <?php if ($_smarty_tpl->tpl_vars['prevpage']->value) {?>
                        <span class="input-group-btn">
                            <a href="announcements.php?page=<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;
if ($_smarty_tpl->tpl_vars['view']->value) {?>&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;
}?>" class="btn btn-default">&laquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['previouspage'];?>
</a>
                        </span>
                    <?php }?>
                    <input class="form-control" style="text-align: center;" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
" disabled="disabled">
                    <?php if ($_smarty_tpl->tpl_vars['nextpage']->value) {?>
                        <span class="input-group-btn">
                            <a href="announcements.php?page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;
if ($_smarty_tpl->tpl_vars['view']->value) {?>&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;
}?>" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['nextpage'];?>
 &raquo;</a>
                        </span>
                    <?php }?>
                </div>
            </div>
        </form>
    </div>
<?php }?>
<?php }} ?>
