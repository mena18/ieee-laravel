function scrollFunction() {
    document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ? document.getElementById("topBtn").style.display = "block" : document.getElementById("topBtn").style.display = "none"
}
window.onscroll = function() {
    scrollFunction()
}, $("#topBtn").click(function() {
    return $("html, body").animate({
        scrollTop: 0
    }, 800), !1
});