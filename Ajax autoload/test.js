function yHandler(){
    var events = document.getElementById('events');
    var contentHeight = events.offsetHeight; //Height of the content
    var yOffset = window.pageYOffset;      //Get the vertical scroll
    var y = yOffset + window.innerHeight;

    while(y >= contentHeight) {
        addcontent();
        $id++;
        break;
    }
    var status = document.getElementById('status');
    status.innerHTML = contentHeight + " | " + y;
}

function addcontent(){
    events.innerHTML += '<div class="events">';
    // Ajax call
    $(function (){
        var $events = $('#events');
        $.ajax({
            type: 'GET',
            url: 'http://localhost:3000/api/event/' + $id,
            success: function(events) {
                $.each(events, function(i, event){
                    $events.append('<li id="event"> Nom de l\'événement: ' + event.Event_title + '</li>');
                    $events.append('<li id="event"> Description de l\'événement: ' + event.Event_description + '</li>');
                    $events.append('<li id="event"> Date de l\'événement: ' + event.Event_date + '</li>');
                    $events.append('<li id="event"> Coût de l\'événement: ' + event.Event_price + '</li>');
                    $events.append('<li id="event"> L\'événement au lieu au : ' + event.Event_location + '</li>');
                });
            }
        });
    });

    events.innerHTML += '</div>';
}

window.onload = yHandler;
window.onscroll = yHandler;
$id = 1;

