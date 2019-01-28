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
                                $events.append('<li id="event"> Nom de l\'événement: ' + event.Event_title + '</li>');
                                $events.append('<li id="event"> Description de l\'événement: ' + event.Event_description + '</li>');
                                $events.append('<li id="event"> Date de l\'événement: ' + event.Event_date + '</li>');
                                $events.append('<li id="event"> Coût de l\'événement: ' + event.Event_price + ' €</li>');
                                $events.append('<li id="event"> L\'événement au lieu au : ' + event.Event_location + '</li>');
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