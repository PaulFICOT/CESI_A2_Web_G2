$(document).on("click","#mentions_legales, #Boite_Idees, #Contact,",function()
       {
           if($(this).attr("id") == "mentions_legales")
           {
               setTimeout(function ()
               {
                   window.showPopup("mentions_legales_popUp");
               }, 50);
           }
           if($(this).attr("id") == "Contact")
           {
               setTimeout(function ()
               {
                   window.showPopup("Contact_popUp");
               }, 50);
           }
           if($(this).attr("id") == "Boite_Idees")
           {
               setTimeout(function ()
               {
                   $("[data-popup-id='boite_idees-popUp']").addClass("animated");
                   window.showPopup("boite_idees-popUp");
               }, 50);
           }
       });
