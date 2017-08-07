$(function () {
    $(".latest_article_container").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".latest_article_container:hidden").slice(0, 4).slideDown();
        if ($(".latest_article_container:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});
