<?php /* Smarty version Smarty-3.1.21, created on 2016-07-25 15:43:45
         compiled from "C:\Server\htdocs\ThemeForest\whmcs\templates\six\homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2220757961791e94c55-33457852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6c9c46c5a263634e3919ed01ab1dcebc830c05d' => 
    array (
      0 => 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\templates\\six\\homepage.tpl',
      1 => 1459250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2220757961791e94c55-33457852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'twitterusername' => 0,
    'LANG' => 0,
    'BASE_PATH_IMG' => 0,
    'template' => 0,
    'announcements' => 0,
    'announcement' => 0,
    'seofriendlyurls' => 0,
    'WEB_ROOT' => 0,
    'announcementsFbRecommend' => 0,
    'systemurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5796179209e8d4_70144739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5796179209e8d4_70144739')) {function content_5796179209e8d4_70144739($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Server\\htdocs\\ThemeForest\\whmcs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h2>

    <div id="twitterFeedOutput">
        <p class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/loading.gif" /></p>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/twitter.js"><?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['news'];?>
</h2>

    <?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['announcement']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
 $_smarty_tpl->tpl_vars['announcement']->index++;
?>
        <?php if ($_smarty_tpl->tpl_vars['announcement']->index<2) {?>
            <div class="announcement-single">
                <h3>
                    <span class="label label-default">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value['rawDate'],"M jS");?>

                    </span>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</a>
                </h3>

                <blockquote>
                    <p>
                        <?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text']))<350) {?>
                            <?php echo $_smarty_tpl->tpl_vars['announcement']->value['text'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>

                            <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
 &raquo;</a>
                        <?php }?>
                    </p>
                </blockquote>

                <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
                    <?php echo '<script'; ?>
>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) {
                                return;
                            }
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    <?php echo '</script'; ?>
>
                    <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                <?php }?>
            </div>
        <?php }?>
    <?php } ?>
<?php }?>
<?php }} ?>
