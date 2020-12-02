$(document).ready(function() {

    $("#services").on({
        mouseenter: function(){
            $("#service-menu").slideDown();
        },
        // mouseleave: function(){
        //     $("#service-menu").slideUp();
        // }
    });

    $("#services, #service-menu").on("mouseleave", function(){
        $("#service-menu").slideUp();
    });

    // Audit
    $("#audit").on({
        mouseenter: function(){
            $("#audit-menu").slideDown();
        },
        mouseleave: function(){
            $("#audit-menu").slideUp();
        }
    });

    $("#audit-menu").on("mouseleave", function(){
        $(this).slideUp();
    });

    // Tax:
    $("#tax").on({
        mouseenter: function(){
            $("#tax-menu").slideDown();
        },
        mouseleave: function(){
            $("#tax-menu").slideUp();
        }
    });

    $("#tax-menu").on("mouseleave", function(){
        $(this).slideUp();
    });
});
