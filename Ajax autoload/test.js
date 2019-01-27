function yHandler(){
    var events = document.getElementById('events');
    var contentHeight = events.offsetHeight; //Height of the content
    var yOffset = window.pageYOffset;      //Get the vertical scroll
    var y = yOffset + window.innerHeight;
    
    $(function(){
        var $events = $('#events');
        $.ajax({
            type: 'GET',
            url: 'http://localhost:3000/event/' + $id,
            success: function(events) {
                $.each(events, function(i, event){
                    $events.append('<li class="event"> Nom de l\'événement: ' + event.Event_title + '</li>');
                    $events.append('<li class="event"> Description de l\'événement: ' + event.Event_description + '</li>');
                    $events.append('<li class="event"> Date de l\'événement: ' + event.Event_date + '</li>');
                    $events.append('<li class="event"> Coût de l\'événement: ' + event.Event_price + '</li>');
                    $events.append('<li class="event"> L\'événement au lieu au : ' + event.Event_location + '</li>');
                });
            }
        });
    });
    
    if(y >= contentHeight) {
        events.innerHTML += '<div class="events';
       
        events.innerHTML += '</div>';
    } //ENDIF
    contentHeight = events.offsetHeight
    var status = document.getElementById('status');
    status.innerHTML = contentHeight + " | " + y;
    $id++;
}
window.onload = yHandler;
window.onscroll = yHandler;
$id = 1;