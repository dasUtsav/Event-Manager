$(document).ready(function(){
    $("#name").click(function(){
        $(".genre").slideDown();
    });
});

$(document).ready(function(){
    $("#genre").click(function(){
        $(".venue").slideDown();
    });
});

$(document).ready(function(){
    $("#venue").click(function(){
        $(".date").slideDown();
    });
});

$(document).ready(function(){
    $("#date").click(function(){
        $(".summary").slideDown();
        $(".submit").slideDown();
    });
});