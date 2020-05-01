
let aberto = false;

$(document).ready(function(){
    
    $("#mae").click(function(){
        if (aberto){
            $("#itens").slideUp(1000);
        }
        else{
            $("#itens").slideDown(1000);
        }

        aberto = !aberto;
          
    })

});

