$(document).ready(function(){
    $("#btn-hamburguer").click(function(e){
        e.stopPropagation();
        $("#itens-menu").slideToggle();
    });

    $(document).click(function(e){
        if(!$(e.target).closest("#itens-menu, #btn-hamburguer").length){
            $("#itens-menu").slideUp();
        }
    });
});