var $html = $('html');

$(document).on("click","#mentions_legales, #connexion, #boite_idees, #Contact,",function()
       {
           if($(this).attr("id") == "mentions_legales")
           {
               setTimeout(function ()
               {
                   window.showPopup("mentions_legales_popUp");
               }, 50);
           }
           if($(this).attr("id") == "connexion")
           {
               setTimeout(function ()
               {
                   window.showPopup("connexion_popUp");
               }, 50);
           }
           if($(this).attr("id") == "contact")
           {
               setTimeout(function ()
               {
                   window.showPopup("contact_popUp");
               }, 50);
           }
           if($(this).attr("id") == "boite_idees")
           {
               setTimeout(function ()
               {
                   $("[data-popup-id='boite_idees_popUp']").addClass("animated");
                   window.showPopup("boite_idees_popUp");
               }, 50);
           }
       });


$('.popupTrigger[data-popup-id]').on('click', function(){
    var popupID = $(this).data('popup-id');
    window.showPopup(popupID);
  });

  window.showPopup = function(id){
    var popupID = id,
        element = $('.popup[data-popup-id="' + popupID + '"]'),
        isAnimated = element.hasClass('animated');

      //set a trigger
      $(window).trigger('popupShown');

      if (isAnimated){
        setTimeout(function(){
          $(element).addClass('animate active');

          clearTimeout(window.clearPopupElementAnimation);
          window.clearPopupElementAnimation = setTimeout(function(){
            $(element).find("[class*='ae-']").addClass('done');
          }, window.effectSpeed + window.cleanupDelay);
        },100);
      }

      $html.addClass('popupShown popup_' + popupID);
      $(element).find('.content').scrollTop(0);
      window.allowSlide = 0;

      //Add Popup ID in the stack
      if (!window.popupShown) window.popupShown = [];
      window.popupShown.push(popupID);

      //Autoplay Iframe
      if ($(element).hasClass('autoplay')){
        var $element = $(element),
            iframe = $element.find('iframe'),
            HTML5video = $element.find('video');

        if ( iframe.length > 0  ) {
          var iframeSrc = $(iframe).attr('src'),
              symbol = (iframeSrc.indexOf('?') > -1) ? "&" : "?";
          $(iframe).attr('src',iframeSrc + symbol + "autoplay=1");
        } else if (HTML5video.length > 0){
          $(HTML5video)[0].play();
        }
      }
    }

    //clean up
    hideDropdown();
  }

  function hidePopup() {
    if ( $.isArray(window.popupShown) ){
      var lastAddedID = window.popupShown.slice(-1)[0],
          $element = $('.popup.visible[data-popup-id="' + lastAddedID + '"]'),
          iframe = $element.find('iframe'),
          video = $element.find('video');

      //stop iframe autoplay
      if (iframe.length > 0 ) {
        $(iframe).each(function(n, element){
          var iframeSrc = $(element).attr('src'),
              symbol = (iframeSrc.indexOf('?autoplay') > -1) ? "?" : "&";

          $(element).attr('src', $(element).attr('src').replace(symbol+'autoplay=1',''));
        });
      }
    });
