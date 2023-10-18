(function ($) {
  $(document).ready(function () {
    var $e = $("#scroll-top");

    $e.on("click", function (e) {
      $("html, body").animate({ scrollTop: 0 }, 600);
      e.preventDefault();
    });

    var updateScroll = function () {
      if ($(window).scrollTop() > 250) {
        $e.addClass("show");
        var $document = $(document).height();
        var $window = $(window).height();
        var $scrollTop = ($(window).scrollTop() / ($document - $window)) * 214;

        if ($("#progress-indicator").length > 0) {
          $("#progress-indicator").css(
            "stroke-dasharray",
            $scrollTop + ", 400"
          );
        }
      } else {
        $e.removeClass("show");
      }
    };

    updateScroll();

    $(window).on("scroll", updateScroll);
  });
})(jQuery);
