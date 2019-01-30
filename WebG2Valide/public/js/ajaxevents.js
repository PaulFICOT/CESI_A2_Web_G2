function yHandler(){
    var events = document.getElementById('events');
    var contentHeight = events.offsetHeight; //Height of the content
    var yOffset = window.pageYOffset;      //Get the vertical scroll
    var y = yOffset + window.innerHeight;

    if(y >= contentHeight) {
        events.innerHTML += '<div class="event">';
        for(i = 1; i<6; i++){
            // Ajax call
            $(function (){
                var $events = $('#events');
                $.ajax({
                    type: 'GET',
                    url: 'http://localhost:3000/api/event/' + $id,
                    success: function(events) {
                        console.log(events);
                        if($.trim(events)){
                            $.each(events, function(i, event){
                                $events.innerHTML('<div class="pad shadow heavy-bottom">');
                                $events.append('<p class="text-cesiBlue" id="event"> Nom de l\'évènement: ' + event.Event_title + '</p>');
                                $events.append('<p class="small" id="event"> Description de l\'évènement: ' + event.Event_description + '</p>');
                                $events.append('<p class="small"> Date de l\'évènement: ' + event.Event_date + '</p>');
                                $events.append('<p class="small"> Coût de l\'évènement: ' + event.Event_price + ' €</p>');
                                $events.append('<p class="tiny"> L\'évènement au lieu au : ' + event.Event_location + '</p>');
                                $events.innerHTML('</div>');
                            });
                            events.innerHTML += '</div>';
                            
                        }else{
                            console.log('empty');
                            i--;
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown){
                        alert("Status: " + textStatus); alert("Error: " + errorThrown);
                    }
                });
            });
            $id++;
        }
    }
    var status = document.getElementById('status');
    status.innerHTML = contentHeight + " | " + y;
}
window.onload = yHandler;
window.onscroll = yHandler;
$id = 1;
