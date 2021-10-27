var googleAnalyticsAppID = "UA-118778979-1";
var logoImage = "../../App/Template/AdminLTE-master/img/m2eV3.png";
var gifBasePath = "https://raw.githubusercontent.com/sumitc91/sumitc91.github.io/master/Gifs/";

(function () {
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-118778979-1', 'auto', { 'cookieDomain': 'none' });
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
})();

window.onload = function () {
    gaWeb('referrer', document.referrer, window.location.href);
    $('.googleAnalytics').click(function () {
        var event = this.getAttribute("ga-event");
        var category = this.getAttribute("ga-category");
        var label = this.getAttribute("ga-label");
        gaWeb(category, event, label);
    });
};

function gaWeb(category, event, label) {
    ga('send', 'event', category, event, label);
}

function gaPageView(page, title) {
    ga('send', 'pageview', {
        'page': page,
        'title': title
    });
}

var appLocation = {
    'userPostLogin': '../../App/Pages/UserPostLoginInit'
};

var statusCodes = {
    '401': 401
};

var navbar_dark_skins = [
    'navbar-primary',
    'navbar-secondary',
    'navbar-info',
    'navbar-success',
    'navbar-danger',
    'navbar-indigo',
    'navbar-purple',
    'navbar-pink',
    'navbar-navy',
    'navbar-lightblue',
    'navbar-teal',
    'navbar-cyan',
    'navbar-dark',
    'navbar-gray-dark',
    'navbar-gray'
];

var navbar_light_skins = [
    'navbar-light',
    'navbar-warning',
    'navbar-white',
    'navbar-orange'
];
var navbar_all_colors = navbar_dark_skins.concat(navbar_light_skins)

var sidebar_colors = [
    'bg-primary',
    'bg-warning',
    'bg-info',
    'bg-danger',
    'bg-success',
    'bg-indigo',
    'bg-lightblue',
    'bg-navy',
    'bg-purple',
    'bg-fuchsia',
    'bg-pink',
    'bg-maroon',
    'bg-orange',
    'bg-lime',
    'bg-teal',
    'bg-olive'
]

var accent_colors = [
    'accent-primary',
    'accent-warning',
    'accent-info',
    'accent-danger',
    'accent-success',
    'accent-indigo',
    'accent-lightblue',
    'accent-navy',
    'accent-purple',
    'accent-fuchsia',
    'accent-pink',
    'accent-maroon',
    'accent-orange',
    'accent-lime',
    'accent-teal',
    'accent-olive'
]

var sidebar_skins = [
    'sidebar-dark-primary',
    'sidebar-dark-warning',
    'sidebar-dark-info',
    'sidebar-dark-danger',
    'sidebar-dark-success',
    'sidebar-dark-indigo',
    'sidebar-dark-lightblue',
    'sidebar-dark-navy',
    'sidebar-dark-purple',
    'sidebar-dark-fuchsia',
    'sidebar-dark-pink',
    'sidebar-dark-maroon',
    'sidebar-dark-orange',
    'sidebar-dark-lime',
    'sidebar-dark-teal',
    'sidebar-dark-olive',
    'sidebar-light-primary',
    'sidebar-light-warning',
    'sidebar-light-info',
    'sidebar-light-danger',
    'sidebar-light-success',
    'sidebar-light-indigo',
    'sidebar-light-lightblue',
    'sidebar-light-navy',
    'sidebar-light-purple',
    'sidebar-light-fuchsia',
    'sidebar-light-pink',
    'sidebar-light-maroon',
    'sidebar-light-orange',
    'sidebar-light-lime',
    'sidebar-light-teal',
    'sidebar-light-olive'
];
var logo_skins = navbar_all_colors;


function getQueryStringValue(key) {
    return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}  

function comparePassword(val1, val2) {
    var lable = val2 + 'Label';
    if ($(val1).val() === $(val2).val()) {
        $(lable).hide();
    }
    else {
        isFormValid = false;
        $(lable).show();
    }
}

function validateEmail(id) {
    var lable = id + 'Label';
    if (isEmail($(id).val())) {
        $(lable).hide();
        $(id).removeClass("is-invalid");
    }
    else {
        isFormValid = false;
        $(lable).show();
        $(id).addClass("is-invalid");
    }
}

function toggleLable(id) {
    var lable = id + 'Label';
    if (IsNullOrEmpty($(id).val())) {
        isFormValid = false;
        $(lable).show();
        $(id).addClass("is-invalid");
    }
    else {
        $(lable).hide();
        $(id).removeClass("is-invalid");
    }
}

function IsNullOrEmpty(val) {
    return val.replace(/^\s+|\s+$/g, "").length === 0;
}

function isEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function ajaxPost(url, formData, handleData) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(formData),
        success: function (data, textStatus, jqXHR) {
            handleData(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            toastr.error(textStatus + ' : some error occured.', errorThrown);
            if (errorThrown === "Unauthorized") {
                eraseCookie(CookieName.token);
                window.location.href = '/user/Login';
            }  
        }
    });
}

function ajaxGet(url, handleData) {
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer ' + getCookie(CookieName.token));
        },
        success: function (data, textStatus, jqXHR) {
            handleData(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {            
            toastr.error(textStatus + ' : some error occured.', errorThrown);
            if (errorThrown === "Unauthorized") {
                eraseCookie(CookieName.token);
                window.location.href = '/user/Login';
            }
        }
    });
}

var CookieName = {
    token: 'token'
};

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function logoutUser() {
    eraseCookie(CookieName.token);
    window.location.href = '/user/Login';
};

function eraseCookie(name) {
    setCookie(name, '', -1);
}

function isCookieAvailable(name) {
    return getCookie(name) !== null && getCookie(name) !== '';
}

var mobileDevice = detectmob();
var ipadDevice = detectipad();
var isAndroidDevice = detectAndroid();
function detectmob() {
    return (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i));
}
function detectipad() {
    return (navigator.userAgent.match(/iPad/i) !== null);
}
function detectAndroid() {
    return (navigator.userAgent.match(/Android/i) !== null);
}


//(function () {
//    function id(v) { return document.getElementById(v); }
//    function loadbar() {
//        var ovrl = id("overlay"),
//            prog = id("progress"),
//            stat = id("progstat"),
//            img = document.images,
//            c = 0;
//        tot = img.length;

//        function imgLoaded() {
//            c += 1;
//            var perc = ((100 / tot * c) << 0) + "%";
//            prog.style.width = perc;
//            stat.innerHTML = "Loading " + perc;
//            if (c === tot) return doneLoading();
//        }
//        function doneLoading() {
//            ovrl.style.opacity = 0;
//            setTimeout(function () {
//                ovrl.style.display = "none";
//            }, 1200);
//        }
//        for (var i = 0; i < tot; i++) {
//            var tImg = new Image();
//            tImg.onload = imgLoaded;
//            tImg.onerror = imgLoaded;
//            tImg.src = img[i].src;
//        }
//    }
//    document.addEventListener('DOMContentLoaded', loadbar, false);
//}());