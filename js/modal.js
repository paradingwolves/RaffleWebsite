$(document).ready(function(){
    $(".btn-secondary").on("click", function(){
        $(".modal").hide();
        $("html").css("overflow-y", "scroll");
    });
    $(".btn-close").on("click", function(){
        $(".modal").hide();
        $("html").css("overflow-y", "scroll");
    });
});