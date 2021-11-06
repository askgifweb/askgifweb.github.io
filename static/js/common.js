var googleAnalyticsAppID = "UA-118778979-1";
var logoImage = "../../App/Template/AdminLTE-master/img/m2eV3.png";
var gifBasePath = "https://raw.githubusercontent.com/sumitc91/sumitc91.github.io/master/Gifs/";

var companyName = "MyAskGif";
var companyLogo = "https://raw.githubusercontent.com/askgifdotcom/icon/main/android-chrome-192x192.png";
var favicon = "/static/images/favicon.ico";
var googleSearch = "https://cse.google.com/cse.js?cx=9ad79e1c9671fd821";
var ampDomain = "https://amp.askgif.com";
var ampDomainHi = "https://amphi.askgif.com";
var canonicalDomain = "https://askgif.com";
var apiUrl = "https://apitest.askgif.com";
var isGifNamePresentInUrlAmp = true;
var isGifNamePresentInUrlCanonical = false;

var siteConfig = {
    gifCdn: "https://raw.githubusercontent.com/sumitc91/sumitc91.github.io/master/Gifs",
    blogCdn: "https://raw.githubusercontent.com/sumitc91/sumitc91.github.io/master/Blogs",
    movieCdn: "https://raw.githubusercontent.com/askgifdotcom/sumitc91.github.io/master/Movies",

    copyrightYear: "2021",
    lastCached: "2020",
    site: "Test"
};

var Model = {
    MetaTags: {
        Author: "Sumit Chourasia",
        Description: companyName + " is the place to explore and share the awesome Gifs with a comic punch.",
        Keywords: "Best Gifs, Unique Gifs, Updated Gifs, Funny Gifs",
        Robots: "FOLLOW,INDEX",
        Amphtml: "amphtml",
        Canonical: "canonical",
        OgDescription: companyName + " is the place to explore and share the awesome GIFs with a comic punch.",
        OgTitle: "AskGif - Find And Share All Gifs At One Place",
        OgImage: "https://raw.githubusercontent.com/sumitc91/sumitc91.github.io/master/99123253_2929029403813445_4489838762607509504_n.jpg",
        Title: "AskGif - Find And Share All Gifs At One Place",
        TagTitle: "{tag} GIFs - All Gifs At One Place",
        TagDescription: "AskGif is the place to explore and share the awesome {tag} GIFs with a comic punch",
        SingleTitle: "{title} - Find And Share On AskGif",
        SingleDescription:"Share this {title} gif and explore more"
    },
    datePublished: "2021/10/23",
    dateModified: "2021/10/24",
    lang: "hi",
    Pagination: {
        PageCount: 121,
        CurrentPage: 1,
        Total: 1452,
        hasPrevious: false,
        urlPrefix: "/gif",
        previousPageNumber: 1,
        pageRange: [1, 2, 3, 4, 5, 6],
        hasNext: true,
        nextPageNumber: 2

    },
    TopMenuList: [
        { name: "Blog", url: "/blog" },
        { name: "Movies", url: "/movie" },
        { name: "Org", url: "/company" }
    ]
};

var BlogModel = {
    MetaTags: {
        Author: "Sumit Chourasia",
        Description: companyName + " is the place to explore and share the awesome Blogs with a comic punch.",
        Keywords: "Best Gifs, Unique Gifs, Updated Gifs, Funny Gifs",
        Robots: "FOLLOW,INDEX",
        Amphtml: "amphtml",
        Canonical: "canonical",
        OgDescription: companyName + " is the place to explore and share the awesome Blogs with a comic punch.",
        OgTitle: "AskGif Blogs - Find Best Reads of All Time",
        OgImage: "https://raw.githubusercontent.com/sumitc91/sumitc91.github.io/master/99123253_2929029403813445_4489838762607509504_n.jpg",
        Title: "AskGif Blogs - Find Best Reads of All Time",
        TagTitle: "{tag} Blogs - Find Best Reads of All Time",
        TagDescription: "AskGif is the place to explore and share the awesome {tag} Blogs with a comic punch",
        CategoryTitle: "{category} Related Blogs - Find Best Reads of All Time",
        CategoryDescription:"AskGif is the place to explore and share the awesome {category} Blogs with a comic punch",
        SingleTitle: "{title} - Find And Share On AskGif",
        SingleDescription: "Share this {title} gif and explore more"
    },
    datePublished: "2021/10/23",
    dateModified: "2021/10/24",
    lang: "hi",
    Pagination: {
        PageCount: 144,
        CurrentPage: 1,
        Total: 1722,
        hasPrevious: false,
        urlPrefix: "/blog",
        previousPageNumber: 1,
        pageRange: [1, 2, 3, 4, 5, 6],
        hasNext: true,
        nextPageNumber: 2

    },
    TopMenuList: [
        { name: "Blog", url: "/blog" },
        { name: "Movies", url: "/movie" },
        { name: "Org", url: "/company" }
    ],
    AllCategory: [
        { name: "life-hacks", url: "/blog/category/life-hacks" },
        { name: "tutorials", url: "/blog/category/tutorials" },
        { name: "story", url: "/blog/category/story" },
        { name: "recipe", url: "/blog/category/recipe" },
        { name: "puzzles", url: "/blog/category/puzzles" },
        { name: "travel", url: "/blog/category/travel" },
        { name: "health-and-fitness", url: "/blog/category/health-and-fitness" },
        { name: "coding", url: "/blog/category/coding" },
        { name: "informatives", url: "/blog/category/informatives" },
        { name: "news", url: "/blog/category/news" }
    ]
};

var MovieModel = {
    MetaTags: {
        Author: "Sumit Chourasia",
        Description: companyName + " is the place to explore and share the awesome Movies with a comic punch.",
        Keywords: "Best Gifs, Unique Gifs, Updated Gifs, Funny Gifs",
        Robots: "FOLLOW,INDEX",
        Amphtml: "amphtml",
        Canonical: "canonical",
        OgDescription: companyName + " is the place to explore and share the awesome Movies with a comic punch.",
        OgTitle: "AskGif - Find And Share All Movies At One Place",
        OgImage: "https://raw.githubusercontent.com/sumitc91/sumitc91.github.io/master/99123253_2929029403813445_4489838762607509504_n.jpg",
        Title: "AskGif - Find And Share All Movies At One Place"
    },
    datePublished: "2021/10/23",
    dateModified: "2021/10/24",
    lang: "hi",
    Pagination: {
        PageCount: 3268,
        CurrentPage: 1,
        Total: 39213,
        hasPrevious: false,
        urlPrefix: "/movie",
        previousPageNumber: 1,
        pageRange: [1, 2, 3, 4, 5, 6],
        hasNext: true,
        nextPageNumber: 2

    },
    TopMenuList: [
        { name: "Blog", url: "/blog" },
        { name: "Movies", url: "/movie" },
        { name: "Org", url: "/company" }
    ]    
};

var footerContent = {
    heading1: "About AskGif Test Github",
    content1: "AskGif is an honest to GOD approach to bring little smile on the tense faces. Make sure to play your part in our mission to make people smile.Keep smiling and keep sharing.",

    tnc: {
        heading1: "1. TERMS",
        content1: "By accessing the website at " + companyName + ", you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.",

        heading2: "2. USE LICENSE",
        content21: "Permission is granted to temporarily download one copy of the materials (information or software) on AskGif's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:",
        contentArr: [
            "modify or copy the materials;",
            "use the materials for any commercial purpose, or for any public display (commercial or non-commercial);",
            "attempt to decompile or reverse engineer any software contained on AskGif's website;",
            "remove any copyright or other proprietary notations from the materials; or",
            "transfer the materials to another person or 'mirror' the materials on any other server."
        ],
        content22:"This license shall automatically terminate if you violate any of these restrictions and may be terminated by AskGif at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format."
    }, 

    links: [
        { name: "Learnings1", url: "/learn" },
        { name: "GeetCode2", url: "/learn/geetcode" },
        { name: "Shopping3", url: "/shopping" },
        { name: "CAFE EL CARPEDIEM4", url: "https://askgif.com/cafe-el-carpediem" }
    ],

    links2: [
        { name: "English", url: "/" },
        { name: "हिंदी", url: "/?lang=hi" },
        { name: "Terms of Service", url: "/terms-of-service" },
        { name: "Privacy Policy", url: "/privacy-policy" },
        { name: "Editor", url: "/editor" },
        { name: "Developers & Contributors", url: "/contributors" },
        { name: "Site Map2", url: "/sitemap.xml" }        
    ],
    social: [
        { uiclass: "fab fa-facebook-f", url: "https://www.facebook.com/askgifdotcom/" },
        { uiclass: "fab fa-twitter", url: "https://twitter.com/askgifdotcom" },
        { uiclass: "fab fa-pinterest", url: "https://www.pinterest.com/askgifdotcom/" },
        { uiclass: "fab fa-instagram", url: "https://www.instagram.com/askgifdotcom/" },
        { uiclass: "fab fa-tumblr", url: "https://www.tumblr.com/blog/askgifdotcom" }
    ]
};

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


function getQueryStringValue(key) {
    return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}  

function getPaginationRange(start,end,current) {
    var i = parseInt(current) - 3;
    var pageRange = [];
    var count = 0;
    for (var j = i; j < i+10; j++) {
        if (j < start) {
            continue;
        }
        if (j > end || count === 6) {
            break;
        }
        pageRange.push(j);
        count++;
    }

    return pageRange;
} 

function loadjscssfile(filename) {
    var fileref = document.createElement('script')
    fileref.setAttribute("type", "text/javascript")
    fileref.setAttribute("src", filename)
    if (typeof fileref != "undefined")
        document.getElementsByTagName("head")[0].appendChild(fileref)
}

function IsNullOrEmpty(val) {
    return val.replace(/^\s+|\s+$/g, "").length === 0;
}

function titleize(str) {
    let upper = true;
    let newStr = "";
    for (let i = 0, l = str.length; i < l; i++) {
        // Note that you can also check for all kinds of spaces  with
        // str[i].match(/\s/)
        if (str[i] === " " || str[i] === "-") {
            upper = true;
            newStr += str[i];
            continue;
        }
        newStr += upper ? str[i].toUpperCase() : str[i].toLowerCase();
        upper = false;
    }
    return newStr;
}

//loadjscssfile("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js");
loadjscssfile("https://cse.google.com/cse.js?cx=9ad79e1c9671fd821");
