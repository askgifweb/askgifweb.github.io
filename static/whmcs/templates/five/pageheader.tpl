{if $emailVerificationIdValid}
    <div class="text-center alert alert-success" role="alert">
        {$LANG.emailAddressVerified}
    </div>
{elseif $emailVerificationIdValid === false}
    <div class="text-center alert alert-danger" role="alert">
        {$LANG.emailKeyExpired} <button id="btnResendVerificationEmail" class="btn btn-success">{$LANG.resendEmail}</button>
    </div>
{elseif $emailVerificationPending && !$showingLoginPage}
    <div class="text-center alert alert-danger" role="alert">
        {$LANG.verifyEmailAddress} <button id="btnResendVerificationEmail" class="btn btn-success">{$LANG.resendEmail}</button>
    </div>
{/if}
<div class="page-header">
    <div class="styled_title"><h1>{$title}{if $desc} <small>{$desc}</small>{/if}</h1></div>
</div>
