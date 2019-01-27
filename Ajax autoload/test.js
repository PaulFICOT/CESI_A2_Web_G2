function yHandler(){
    var wrap = document.getElementById('wrap');
    var contentHeight = wrap.offsetHeight; //Height of the content
    var yOffset = window.pageYOffset;      //Get the vertical scroll
    var y = yOffset + window.innerHeight;

    if(y >= contentHeight) {
        wrap.innerHTML += '<div class="newData"></div>';
        //Ajax call
    }
    var status = document.getElementById('status');
    status.innerHTML = contentHeight + " | " + y;
}
window.onscroll = yHandler;