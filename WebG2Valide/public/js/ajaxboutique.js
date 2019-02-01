function yHandler(){
    var produits = document.getElementById('produits');
    var contentHeight = produits.offsetHeight; //Height of the content
    var yOffset = window.pageYOffset;      //Get the vertical scroll
    var y = yOffset + window.innerHeight;

    if(y >= contentHeight) {
        $produits.innerHTML += '<div class="produit">';
        for(i = 1; i<3; i++){
            // Ajax call
            $(function (){
                var $produits = $('#products');
                $.ajax({
                    type: 'GET',
                    url: 'http://localhost:3000/api/product/' + $id,
                    success: function(produits) {
                        console.log(produits);
                        if($.trim(produits)){
                            $.each(produits, function(i, produit){
                                $produits.innerHTML('<div class="pad shadow heavy-bottom">');
                                $produits.append('<p class="text-cesiBlue" id="produits"> Nom du produit : ' + produit.Product_name + '</p>');
                                $produits.append('<p class="small" id="produits"> Coût du produit : ' + produit.Product_price + ' €</p>');
                                $produits.append('<p class="small" id="produits"> Description du produit : ' + produit.Product_description + ' €</p>');
                                $produits.append('<a class="button round" onclick="">Acheter</p>');
                                $produits.innerHTML('</div>');
                            });
                            $produits.innerHTML += '</div>';

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
