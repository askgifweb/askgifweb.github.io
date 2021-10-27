$(document).ready(function () {
    var bLazy = new Blazy({
        //options here
        container: '.lazyloading',
        success: function (element) {
            //console.log("Element loaded: ", element.nodeName);
        }, error: function (ele, msg) {
            var image_url = ele.dataset.src;
            var image_base = image_url;
            var image_name = '';
            // Get the index of the last .
            var lastIndex = image_base.lastIndexOf('/');

            // Add the string before the last .
            // Return updated string, this will update the image_base attribute value
            image_name = image_base.substr(lastIndex + 1);
            image_base = image_base.substr(0, lastIndex) + '/';

            gaWeb('GithubImageLoadFailure', image_url, window.location.href);
            //console.log(image_url);
            var blog_url_string = 'sumitc91.github.io/Gifs';

            if (image_url.indexOf(blog_url_string) !== -1) {
                var blog_url = 'https://raw.githubusercontent.com/sumitc91/sumitc91.github.io/master/Gifs/';

                if (image_url.indexOf(blog_url) !== -1) {
                    console.log('image not found in s3 askgif-blog as well.');
                }
                else {
                    //console.log(image_name);
                    ele.attributes.src.value = blog_url + image_name;
                }
            }
            else {
                var gif_url = 'https://askgif2.s3-ap-southeast-1.amazonaws.com/';

                if (image_url.indexOf(gif_url) !== -1) {
                    console.log('image not found in s3 askgif-gifs as well.');
                }
                else {
                    //console.log(image_name);
                    ele.attributes.src.value = gif_url + image_name;
                }

            }
        }
    });
});

//$("#image_assets").autocomplete({
//    source: function (request, response) {
//        var searchType = $(".searchType:checked").val();        
//        gaWeb('Search', request.term + '*', window.location.href);
//        $.ajax({
//            url: "/api/search",
//            //dataType: "jsonp",
//            data: {
//                q: request.term,
//                searchType: searchType,
//                lang: getQueryStringValue("lang")
//            },
//            success: function (data) {
//                response(data);
//            }
//        });
//    },
//    minLength: 2,
//    delay: 700,
//    select: function (event, ui) {
//        //log( "Selected: " + ui.item.value + " aka " + ui.item.id );
//        if (ui.item.type === "blog")
//            window.location.replace('/blog/' + ui.item.id + '/' + ui.item.titleSlug + '/');
//        else
//            window.location.replace('/gif/' + ui.item.id + '/' + ui.item.titleSlug + '/');
//    }
//});

//$("#image_assets").data("ui-autocomplete")._renderItem = function (ul, item) {
//    var i;
//    text = '';
//    text = '[ ';
//    for (i = 0; i < item.tags.length; i++) {
//        item.tags[i] = item.tags[i].replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(this.term.replace(/ /g, '-')) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<span class='highlight gray'>$1</span>");
//        text += item.tags[i] + ", ";
//    }

//    text += ']';    
//    item.title = item.title.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + $.ui.autocomplete.escapeRegex(this.term) + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<span class='highlight gray'>$1</span>");

//    if (item.type === "blog")
//        return $('<li/>', { 'data-value': item.title }).append($('<a/>', { href: "#" })
//            .append($('<img/>', { src: 'https://raw.githubusercontent.com/sumitc91/data/master/askgif-static/images/blog.png', alt: 'blog', width: '30px', height: '30px' })).append($('<img/>', { src: item.imageUrl, alt: item.title, width: '30px', height: '30px' })).append(' ' + item.title + ' ' + text))
//            .appendTo(ul);
//    else
//        return $('<li/>', { 'data-value': item.title }).append($('<a/>', { href: "#" })
//            .append($('<img/>', { src: 'https://raw.githubusercontent.com/sumitc91/data/master/askgif-static/images/gif.png', alt: 'blog', width: '30px', height: '30px' })).append($('<img/>', { src: item.imageUrl, alt: item.title, width: '30px', height: '30px' })).append(' ' + item.title + ' ' + text))
//            .appendTo(ul);        

//};

$("#radioset").buttonset();
$("#button").button();
