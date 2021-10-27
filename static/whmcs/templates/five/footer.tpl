

{if $pagetitle eq $LANG.carttitle}</div>{/if}

    </div>
</div>

<div class="footerdivider">
    <div class="fill"></div>
</div>

<div class="whmcscontainer">
    <div class="footer">
        <div id="copyright">{$LANG.copyright} &copy; {$date_year} {$companyname}. {$LANG.allrightsreserved}.</div>
        {if $langchange}<div id="languagechooser">{$setlanguage}</div>{/if}
        <div class="clear"></div>
    </div>
</div>

<script type="text/javascript">
jQuery('#btnResendVerificationEmail').click(function() {
    jQuery.post('clientarea.php',
        {
            'token': '{$token}',
            'action': 'resendVerificationEmail'
        }).done(function(data) {
            jQuery('#btnResendVerificationEmail').prop('disabled', true).text('{$LANG.emailSent}');
        });
});
</script>

{$footeroutput}

</body>
</html>

