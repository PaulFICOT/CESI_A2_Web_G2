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
                                $events.append('<h2 id="event"> Nom de l\'événement: ' + event.Event_title + '</h2>');
                                $events.append('<p id="event"> Date de l\'événement: ' + event.Event_date + '</p>');
                                $events.append(' id="event"> L\'événement au lieu au/à : ' + event.Event_location + '</li>');
                                $events.append('<p id="event"> Coût de l\'événement: ' + event.Event_price + ' €</p>');
                                $events.append('</div> <div id="slider" class="toCenter heavy-bottom"><figure>');
                                $events.append('<a><img src="public/images/event' + event.Id_photo + 'alt="evenement" class="retro"><a/>');
                                $events.append('</figure>');
                                $events.append('<form method="POST" action="getdata.php" enctype="multipart/form-data">');
                                $events.append('<input type="file" name="myimage">');
                                $events.append('<input type="submit" name="submit_image" value="Upload">');
                                $events.append('</form></div>');
                                $events.append('<div class="toCenter" id="event"> </p>Description de l\'événement: ' + event.Event_description + '</p>');
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
