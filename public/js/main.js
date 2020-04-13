! function(e) {
    "use strict";
    var s = e(".nav-year li"),
        t = !0;
    e(window).scroll(function() {
        var s = window.innerHeight,
            i = window.scrollY,
            o = i + s,
            n = e(".home-count").offset().top;
        o > n && 1 == t && (t = !1, e(".home-count").each(function() {
            e(this).prop("Counter", 0).animate({
                Counter: e(this).text()
            }, {
                duration: 4e3,
                easing: "swing",
                step: function(s) {
                    e(this).text(Math.ceil(s))
                }
            })
        })), i + s < n && (t = !0)
    });
    var i = document.getElementById("Graduated"),
        o = document.getElementById("Undergraduate"),
        n = document.getElementById("btn-right"),
        a = document.getElementById("btn-left");
    a.onclick = function() {
        i.className += " hide", e(o).removeClass("hide"), e(a).removeClass("btnActive"), a.className += " btnActive", e(n).removeClass("btnActive")
    }, n.onclick = function() {
        e(o).hasClass("hide") && e(o).removeClass("hide"), o.className += " hide", e(i).removeClass("hide"), e(n).removeClass("btnActive"), n.className += " btnActive", e(a).removeClass("btnActive")
    }, e(".events-list .row > div").slice(0, 8).show(), e(".excursions-list .row > div").slice(0, 8).show(), e(".teachers-list .row > div").slice(0, 8).show(), e(".gallery-list .container > .row").slice(0, 4).show(), e(".academics-content .container > .row").slice(0, 6).show(), e("div").on("mouseleave", function() {
        e(this).hasClass("events-single-location") && e(".events-single-location iframe").css("pointer-events", "none"), e(this).hasClass("excursions-single-location") && e(".excursions-single-location iframe").css("pointer-events", "none")
    }), e("a,section,div,span,li,input[type='text'],input[type='button'],tr,button").on("click", function() {
        return e(this).hasClass("events-single-location") && e(".events-single-location iframe").css("pointer-events", "auto"), e(this).hasClass("excursions-single-location") && e(".excursions-single-location iframe").css("pointer-events", "auto"), e(this).hasClass("yr-prev") ? (s.filter(".active").prev("li").find('a[data-toggle="tab"]').tab("show"), !1) : e(this).hasClass("yr-next") ? (s.filter(".active").next("li").find('a[data-toggle="tab"]').tab("show"), !1) : (e(this).hasClass("events-load-more") && (e(".events-list .row > div:hidden").slice(0, 4).slideDown(), 0 == e(".events-list .row > div:hidden").length && e(".events-load-more").fadeOut("slow"), e("html,body").animate({
            scrollTop: e(this).offset().top - 600
        }, 1500)), e(this).hasClass("excursions-load-more") && (e(".excursions-list .row > div:hidden").slice(0, 4).slideDown(), 0 == e(".excursions-list .row > div:hidden").length && e(".excursions-load-more").fadeOut("slow"), e("html,body").animate({
            scrollTop: e(this).offset().top - 600
        }, 1500)), e(this).hasClass("teachers-load-more") && (e(".teachers-list .row > div:hidden").slice(0, 4).slideDown(), 0 == e(".teachers-list .row > div:hidden").length && e(".teachers-load-more").fadeOut("slow"), e("html,body").animate({
            scrollTop: e(this).offset().top - 600
        }, 1500)), e(this).hasClass("gallery-load-more") && (e(".gallery-list .container > .row:hidden").slice(0, 1).slideDown(), 0 == e(".gallery-list .container > .row:hidden").length && e(".gallery-load-more").fadeOut("slow"), e("html,body").animate({
            scrollTop: e(this).offset().top - 200
        }, 1500)), e(this).hasClass("academics-load-more") && (e(".academics-content .container > .row:hidden").slice(0, 6).slideDown(), 0 == e(".academics-content .container > .row:hidden").length && e(".academics-load-more").fadeOut("slow"), e("html,body").animate({
            scrollTop: e(this).offset().top - 1100
        }, 1500)), void(e(this).hasClass("closecanvas") && e("body").removeClass("offcanvas-stop-scrolling")))
    }), e(".datepicker").datepicker({
        format: "mm/dd/yyyy",
        todayHighlight: !0,
        autoclose: !0
    }), e(".skillbar").each(function() {
        e(this).find(".skillbar-bar").animate({
            width: e(this).attr("data-percent")
        }, 2e3)
    })
}(jQuery);