document.body.onload = function() {
    "use strict";
    $("#megaReg").on("submit", function(e) {
        e.preventDefault(),
            function(e, t) {
                var r = (i = t.id, l = !1, $('input[type="text"], input[type="email"], textarea', $("#" + i)).each(function() {
                        var e = $(this),
                            t = e.data("check"),
                            r = e.val();
                        "" === r || r.match(t) ? (console.log(e), console.log(r.match(t)), e.addClass("error"), l = !0) : e.removeClass("error")
                    }), l),
                    a = function(e) {
                        var t = $("#" + e + ' input[name="date"]').val();
                        if (!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(t)) return !1;
                        var r = t.split("/"),
                            a = parseInt(r[1], 10),
                            n = parseInt(r[0], 10),
                            o = parseInt(r[2], 10);
                        if (o < 1e3 || o > 3e3 || 0 == n || n > 12) return !1;
                        var s = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                        (o % 400 == 0 || o % 100 != 0 && o % 4 == 0) && (s[1] = 29);
                        return a > 0 && a <= s[n - 1]
                    }(t.id),
                    n = (o = t.id, s = !1, $("#" + o + "  select").each(function() {
                        if (null === $(this).val()) return $(this).addClass("error"), s = !0, !0;
                        $(this).removeClass("error")
                    }), s);
                var o, s;
                var i, l;
                a ? $("#" + t.id + ' input[name="date"]').removeClass("error") : $("#" + t.id + ' input[name="date"]').addClass("error");
                console.log(r), (r || !a || n) && (console.log("error"), e.preventDefault())
            }(e, e.target)
    })
};