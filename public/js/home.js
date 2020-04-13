! function() {
    var t = !0;
    $(window).scroll(function() {
        var n = window.innerHeight,
            o = window.scrollY,
            i = o + n,
            e = $(".home-count").offset().top;
        i > e && 1 == t && (t = !1, $(".home-count").each(function() {
            $(this).prop("Counter", 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4e3,
                easing: "swing",
                step: function(t) {
                    $(this).text(Math.ceil(t))
                }
            })
        })), o + n < e && (t = !0)
    })
}();