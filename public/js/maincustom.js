function VolunteerImageFix() {
    $(".imageOfVolunteer").height($(".imageOfVolunteer").parent().width())
}
$(".deleteCheck").on("click", function(e) {
    var n = $(this);
    e.preventDefault(), $(".alert-box").removeClass("hidden"), $(".alert-box .cancelDelete").on("click", function() {
        $(".alert-box").addClass("hidden")
    }), $(".alert-box .confirmDelete").on("click", function() {
        window.location.href = n[0].href
    })
}), $("#edit-event-form, #edit-news-form").on("submit", function() {
    return confirm("Are you sure you want to edit the event?")
}), VolunteerImageFix(), $(window).on("resize", function() {
    VolunteerImageFix()
});