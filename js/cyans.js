$(window).scroll(function () {
    var dt = $(document).scrollTop();
    var wt = $(window).height();
    if (dt <= 0) {
        $("#totop").hide();
        return;
    }
    $("#totop").show();
});

$("#totop").click(function () { $("html,body").animate({ scrollTop: 0 }, 200) });
