$(function(){
    //adds a carrot to the end of a list that has a class of
    $('li.dropdown').append(' >');
    if ($(window).width() < 426){
        $('#x').hide();
        $('.nav').hide();
        $('#o').click(function(){
            $('.nav').show();
            $('#o').hide();
            $('#x').show();
        })
        $('#x').click(function(){
            $('.nav').hide();
            $('#x').hide();
            $('#o').show();
        })
        $(".dropdown-btn").click(function(){
            $(".dropdown-menu").toggle();
        });
    } else if ($(window).width() < 769){
        $('dropdown-menu').hide();
        $('dropdown-btn').click(function(){
            $(".dropdown-menu").toggle();
            $(".dropdown-menu").not(this).hide();
        });
    } else if ($(window).width() > 768) {
        $('.dropdown-menu').hide();
        $(".dropdown-btn").mouseover(function(){
            $(".dropdown-menu").toggle();
        });
    }

    $(".dropdown-menu").hide();
    $(this).find(".dropdown-btn").click(function(){
        $(this).children(".dropdown-menu").slideToggle(1000, "swing");
        });
});
