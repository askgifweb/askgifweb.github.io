jQuery(document).ready(function(){

  // Tabs Changer
  // ===============================
    //Default Action
    jQuery(".tab-content").hide(); //Hide all content
    if (jQuery(location).attr('hash').substr(1)!="") {
        var activeTab = jQuery(location).attr('hash');
        jQuery("ul").find('li').removeClass('open');
        jQuery("ul.nav li").removeClass("active"); //Remove any "active" class
        jQuery(activeTab+"nav").addClass("active");
        jQuery(activeTab).show();
    } else {
        jQuery("#tabs ul.nav .nav-tabs li:first").addClass("active").show(); //Activate first tab
        jQuery(".tab-content:first").show(); //Show first tab content
    }

    //On Click Event
    jQuery("#tabs ul.nav li").click(function() {
        jQuery("ul").find('li').removeClass('open');
        jQuery("ul.nav li").removeClass("active"); //Remove any "active" class
        jQuery(this).addClass("active"); //Add "active" class to selected tab
        var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
        if (activeTab.substr(0,1)=="#" && activeTab.substr(1)!="") { //Determine if a tab or link
            jQuery(".tab-content").hide(); //Hide all tab content
            jQuery(activeTab).fadeIn(); //Fade in the active content
            return false;
        } else {
            return true; // If link allow redirect
        }
    });

    jQuery('a.autoLinked').click(function (e) {
        e.preventDefault();

        var child = window.open();
        child.opener = null;
        child.location = e.target.href;
    });

    /**
     * Code will loop through each element that has the class markdown-editor and
     * enable the Markdown editor.
     */
    var count = 0,
        editorName = 'clientMDE',
        counter = 0;
    jQuery(".markdown-editor").each(function( index ) {
        count++;
        var autoSaveName = jQuery(this).data('auto-save-name'),
            footerId = jQuery(this).attr('id') + '-footer';
        if (typeof autoSaveName == "undefined") {
            autoSaveName = 'client_area';
        }
        window[editorName + count.toString()] = jQuery(this).markdown(
        {
            footer: '<div id="' + footerId + '" class="markdown-editor-status"></div>',
            autofocus: false,
            savable: false,
            resize: 'vertical',
            iconlibrary: 'fa',
            language: locale,
            onShow: function(e){
                var content = '',
                    save_enabled = false;
                if(typeof(Storage) !== "undefined") {
                    // Code for localStorage/sessionStorage.
                    content = localStorage.getItem(autoSaveName);
                    save_enabled = true;
                    if (content && typeof(content) !== "undefined") {
                        e.setContent(content);
                    }
                }
                jQuery("#" + footerId).html(parseMdeFooter(content, save_enabled, saved));
            },
            onChange: function(e){
                var content = e.getContent(),
                    save_enabled = false;
                if(typeof(Storage) !== "undefined") {
                    counter = 3;
                    save_enabled = true;
                    localStorage.setItem(autoSaveName, content);
                    doCountdown();
                }
                jQuery("#" + footerId).html(parseMdeFooter(content, save_enabled));
            },
            onPreview: function(e){
                var originalContent = e.getContent(),
                    parsedContent;

                jQuery.ajax({
                    url: 'clientarea.php',
                    async: false,
                    data: {token: csrfToken, action: 'parseMarkdown', content: originalContent},
                    success: function (data) {
                        parsedContent = JSON.parse(data);
                    }
                });

                return parsedContent.body ? parsedContent.body : '';
            },
            additionalButtons: [
                [{
                    name: "groupCustom",
                    data: [{
                        name: "cmdHelp",
                        title: "Help",
                        hotkey: "Ctrl+F1",
                        btnClass: "btn open-modal",
                        href: "submitticket.php?action=markdown-page",
                        icon: {
                            glyph: 'glyphicons glyphicons-question-sign',
                            fa: 'fa fa-question-circle',
                            'fa-3': 'icon-question-sign'
                        },
                        callback: function(){},
                        additionalAttr: [
                            {
                                name: 'data-modal-title',
                                value: markdownGuide
                            }
                        ]
                    }]
                }]
            ]
        });

        jQuery(this).closest("form").bind({
            submit: function() {
                if(typeof(Storage) !== "undefined") {
                    localStorage.removeItem(autoSaveName);
                }
            }
        });
        jQuery("button[data-modal-title='" + markdownGuide + "'").on('click', function(){
            window.open(jQuery(this).attr('href'));
        });
    });

    /**
     * Parse the content to populate the markdown editor footer.
     *
     * @param {string} content
     * @param {bool} auto_save
     * @param {string} [saveText]
     * @returns {string}
     */
    function parseMdeFooter(content, auto_save, saveText)
    {
        saveText = saveText || saving;
        var pattern = /[a-zA-Z0-9_\u0392-\u03c9]+|[\u4E00-\u9FFF\u3400-\u4dbf\uf900-\ufaff\u3040-\u309f\uac00-\ud7af]+/g,
            m = [],
            word_count = 0,
            line_count = 0;
        if (content) {
            m = content.match(pattern);
            line_count = content.split(/\\r\\n|\\r|\\n/).length;
        }
        for(var i = 0; i < m.length; i++) {
            if(m[i].charCodeAt(0) >= 0x4E00) {
                word_count += m[i].length;
            } else {
                word_count += 1;
            }
        }
        return '<div class="small-font">lines: ' + line_count
            + '&nbsp;&nbsp;&nbsp;words: ' + word_count + ''
            + (auto_save ? '&nbsp;&nbsp;&nbsp;<span class="markdown-save">' + saveText + '</span>' : '')
            + '</div>';
    }

    /**
     * Countdown the save timeout. When zero, the span will update to show saved.
     */
    function doCountdown()
    {
        if (counter >= 0) {
            if (counter == 0) {
                jQuery("span.markdown-save").html(saved);
            }
            counter--;
            setTimeout(doCountdown, 1000);
        }
    }
});

// Checkboxes Toggle
// ===============================

function toggleCheckboxes(classname) {
    jQuery("."+classname).attr('checked',!jQuery("."+classname+":first").is(':checked'));
}

// Disable Field Class
// ===============================

function disableFields(classname,disable) {
    if (disable) jQuery("."+classname).attr("disabled","disabled");
    else jQuery("."+classname).removeAttr("disabled");
}

// Open Centered Popup
// ===============================

function popupWindow(addr,popname,w,h,features) {
  var winl = (screen.width-w)/2;
  var wint = (screen.height-h)/2;
  if (winl < 0) winl = 0;
  if (wint < 0) wint = 0;
  var settings = 'height=' + h + ',';
  settings += 'width=' + w + ',';
  settings += 'top=' + wint + ',';
  settings += 'left=' + winl + ',';
  settings += features;
  win = window.open(addr,popname,settings);
  win.window.focus();
}

// Support Tickets
// ===============================

function extraTicketAttachment() {
    jQuery("#fileuploads").append('<input type="file" name="attachments[]" style="width:70%;" /><br />');
}

function rating_hover(id) {
    var selrating=id.split('_');
    for(var i=1; i<=5; i++){
        if(i<=selrating[1]) document.getElementById(selrating[0]+'_'+i).style.background="url(images/rating_pos.png)";
        if(i>selrating[1]) document.getElementById(selrating[0]+'_'+i).style.background="url(images/rating_neg.png)";
    }
}
function rating_leave(id){
    for(var i=1; i<=5; i++){
        document.getElementById(id+'_'+i).style.background="url(images/rating_neg.png)";
    }
}
function rating_select(tid,c,id){
    window.location='viewticket.php?tid='+tid+'&c='+c+'&rating='+id;
}

/* ============================================================
 * bootstrap-dropdown.js v2.0.3
 * http://twitter.github.com/bootstrap/javascript.html#dropdowns
 * ============================================================
 * Copyright 2012 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================ */


!function ($) {

  "use strict"; // jshint ;_;


 /* DROPDOWN CLASS DEFINITION
  * ========================= */

  var toggle = '[data-toggle="dropdown"]'
    , Dropdown = function (element) {
        var $el = $(element).on('click.dropdown.data-api', this.toggle)
        $('html').on('click.dropdown.data-api', function () {
          $el.parent().removeClass('open')
        })
      }

  Dropdown.prototype = {

    constructor: Dropdown

  , toggle: function (e) {
      var $this = $(this)
        , $parent
        , selector
        , isActive

      if ($this.is('.disabled, :disabled')) return

      selector = $this.attr('data-target')

      if (!selector) {
        selector = $this.attr('href')
        selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7
      }

      $parent = $(selector)
      $parent.length || ($parent = $this.parent())

      isActive = $parent.hasClass('open')

      clearMenus()

      if (!isActive) $parent.toggleClass('open')

      return false
    }

  }

  function clearMenus() {
    $(toggle).parent().removeClass('open')
  }


  /* DROPDOWN PLUGIN DEFINITION
   * ========================== */

  $.fn.dropdown = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('dropdown')
      if (!data) $this.data('dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  $.fn.dropdown.Constructor = Dropdown


  /* APPLY TO STANDARD DROPDOWN ELEMENTS
   * =================================== */

  $(function () {
    $('html').on('click.dropdown.data-api', clearMenus)
    $('body')
      .on('click.dropdown', '.dropdown form', function (e) { e.stopPropagation() })
      .on('click.dropdown.data-api', toggle, Dropdown.prototype.toggle)
  })

}(window.jQuery);
