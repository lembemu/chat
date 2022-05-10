
$(document).ready(function(){
    var properties={
        "background-color":"whitesmoke",
        "padding":"20px"
    };
    var display={
        "display":"flex",
        "position":"relative",
        "bottom":"0",
        "transition":"2s"
    };
    $(".closebtn").click(function(){
        $(".menu-content").hide();
        $(".menu-btn").css("display","block");
    });
    $(".menu-btn").click(function(){
        $(".menu-content").css(properties);
        $(".menu-btn").css("display","none");
    });
    $(".search-text").click(function(){
        $("form").css(display);
        $(".search-text").css("display","none");
    });
    $(".search-btn").click(function(){
        $(".search-text").css(display);
    });
});