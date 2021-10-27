$(function () {
    window.askgif.i18nLocalizePage();
});

$(document).ready(function () {

    // unblock when ajax activity stops
    $(document).ajaxStop($.unblockUI);
    gaWeb('SiteInfo', siteConfig.site, window.location.href);
});

$(window).scroll(function (e) {
    var scroller_anchor = $("#floater").offset().top;
    if ($(this).scrollTop() > 5 && $('.scroller').css('position') != 'fixed') {
        $('#floater').css({
            'position': 'fixed',
            'margin-top': '80px'
        });

        $('#floater-left').css({
            'position': 'fixed',
            'margin-top': '80px'
        });
    }
    else if ($('.scroller').css('position') != 'relative') {
        $('#floater').css({
            'position': 'absolute',
            'margin-top': '80px'
        });

        $('#floater-left').css({
            'position': 'absolute',
            'margin-top': '80px'
        });
    }
});