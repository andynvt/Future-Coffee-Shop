$(document).ready(function () {
    $(".tab_content").hide();
    $(".tabs >li").first().addClass("active");
    $(".tab_content").first().show();
    $(".tabs >li").click(function () {
        var tab = $(this).data("target");
        $(".tabs >li").removeClass("active");
        $(this).addClass("active");
        $(".tab_content").hide();

        $(tab).fadeIn();
    })
});
