function yHandler(){
    /*var events = document.getElementsByClassName('event');
    var contentHeight = events.offsetHeight; //Height of the content
    var yOffset = window.pageYOffset;      //Get the vertical scroll
    var y = yOffset + window.innerHeight;

    if(y >= contentHeight) {
        events.innerHTML += '<div class="event">';
        for(i = 1; i<4; i++){
            // Ajax call
            $(function (){
                var $events = $('#events');*/
                $.ajax({
                    type: 'GET',
                    url: 'http://127.0.0.1:3000/api/event/' + $id,
                    success: function(events) {
                        console.log(events);
                        if($.trim(events)){
                            $.each(events, function(i, event){
                                $events.append('<h2 id="event"> Nom de l\'événement: ' + event.Event_title + '</h2>');
                                $events.append('<p class="event">L\'événement aura lieu le x&: ' + event.Event_date + '</p>');
                                $events.append('<li class="event"> L\'événement au lieu au/à : ' + event.Event_location + '</li>');
                                $events.append('<p class="event"> Coût de l\'événement: ' + event.Event_price + ' €</p>');
                                $events.append('</div> <div id="slider" class="toCenter heavy-bottom"><figure>');                                $events.append('</figure>');
                                $events.append('</div>');
                                $events.append('<div class="toCenter" id="event"> </p>Description de l\'événement: ' + event.Event_description + '</p>');
                            });
                            events.append += '</div>';
                            console.log(id)
                        }else{
                            console.log('empty');
                            id--;
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown){
                        alert("Status: " + textStatus); alert("Error: " + errorThrown);
                    }
                });
}/*);
            $id++;
        }
    }
}
window.onload = yHandler;
window.onscroll = yHandler;*/
$id = 1;
