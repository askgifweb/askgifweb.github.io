{include file="$template/pageheader.tpl" title=$LANG.clientareanavsecurity}

{include file="$template/clientareadetailslinks.tpl"}

{if $successful}
<div class="alert alert-success">
    <p>{$LANG.changessavedsuccessfully}</p>
</div>
{/if}

{if $errormessage}
<div class="alert alert-error">
    <p class="bold">{$LANG.clientareaerrors}</p>
    <ul>
        {$errormessage}
    </ul>
</div>
{/if}

{if $twofaavailable}

{if $twofaactivation}

<script>{literal}
function dialogSubmit() {
    $('div#twofaactivation form').attr('method', 'post');
    $('div#twofaactivation form').attr('action', 'clientarea.php');
    $('div#twofaactivation form').attr('onsubmit', '');
    $('div#twofaactivation form').submit();
    return true;
}
{/literal}</script>

<div id="twofaactivation">
    {$twofaactivation}
</div>

<script type="text/javascript">
$("#twofaactivation input:text:visible:first,#twofaactivation input:password:visible:first").focus();
</script>

{else}

<h2>{$LANG.twofactorauth}</h2>

<p>{$LANG.twofaactivationintro}</p>

<br />

<form method="post" action="clientarea.php?action=security">
<input type="hidden" name="2fasetup" value="1" />
<p align="center">
{if $twofastatus}
<input type="submit" value="{$LANG.twofadisableclickhere}" class="btn btn-danger" />
{else}
<input type="submit" value="{$LANG.twofaenableclickhere}" class="btn btn-success" />
{/if}
</p>
</form>

<br /><br />

{/if}

{/if}

{if $showSsoSetting && !$twofaactivation}

    <h2>{$LANG.sso.title}</h2>

    <p>{$LANG.sso.summary}</p>

    <p>{$LANG.sso.disablenotice}</p>

    <form id="frmSingleSignOn">
        <input type="hidden" name="token" value="{$token}" />
        <input type="hidden" name="action" value="security" />
        <input type="hidden" name="toggle_sso" value="1" />
        <p class="textcenter">
            <input type="checkbox" name="allow_sso" class="toggle-switch" id="inputAllowSso"{if $isSsoEnabled} checked{/if}>
            &nbsp;
            <span id="ssoStatusTextEnabled"{if !$isSsoEnabled} class="hide"{/if}>
                {$LANG.sso.enabled}
            </span>
            <span id="ssoStatusTextDisabled"{if $isSsoEnabled} class="hide"{/if}>
                {$LANG.sso.disabled}
            </span>
        </p>
    </form>

    <link href="{$BASE_PATH_CSS}/bootstrap-switch.min.css" rel="stylesheet">
    <script src="{$BASE_PATH_JS}/bootstrap-switch.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery(".toggle-switch").bootstrapSwitch({
            onColor: 'success',
            size: 'mini'
        });
        jQuery("#inputAllowSso").on('switchChange.bootstrapSwitch', function(event, isChecked) {
            if (isChecked) {
                jQuery("#ssoStatusTextEnabled").removeClass('hide').show();
                jQuery("#ssoStatusTextDisabled").hide();
            } else {
                jQuery("#ssoStatusTextDisabled").removeClass('hide').show();
                jQuery("#ssoStatusTextEnabled").hide();
            }
            jQuery.post("clientarea.php", jQuery("#frmSingleSignOn").serialize());
        });
    });
    </script>

    <br />
    <br />

{/if}

{if $securityquestionsenabled && !$twofaactivation}

<h2>{$LANG.clientareanavsecurityquestions}</h2>

<form class="form-horizontal" method="post" action="{$smarty.server.PHP_SELF}?action=changesq">

  <fieldset class="onecol">

{if !$nocurrent}
    <div class="control-group">
        <label class="control-label" for="currentans">{$currentquestion}</label>
        <div class="controls">
            <input type="password" name="currentsecurityqans" id="currentans" autocomplete="off" />
        </div>
    </div>
{/if}
    <div class="control-group">
        <label class="control-label" for="securityqid">{$LANG.clientareasecurityquestion}</label>
        <div class="controls">
            <select name="securityqid" id="securityqid">
            {foreach key=num item=question from=$securityquestions}
                <option value={$question.id}>{$question.question}</option>
            {/foreach}
            </select>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="securityqans">{$LANG.clientareasecurityanswer}</label>
        <div class="controls">
            <input type="password" name="securityqans" id="securityqans" autocomplete="off" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="securityqans2">{$LANG.clientareasecurityconfanswer}</label>
        <div class="controls">
            <input type="password" name="securityqans2" id="securityqans2" autocomplete="off" />
        </div>
    </div>

  </fieldset>

  <div class="form-actions">
    <input class="btn btn-primary" type="submit" name="submit" value="{$LANG.clientareasavechanges}" />
    <input class="btn" type="reset" value="{$LANG.cancel}" />
  </div>

</form>

{/if}
