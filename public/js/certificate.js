document.body.onload = function() {
    "use strict";
    if($("body").width() < 430){
        $("img").attr("src","images/signature2.png");
    }else{
        $("img").attr("src","images/signature.png");
    }
    var nameWidth = $(".attendeeName").width(),
        courseWidth = $(".courseName").width(),
        picWidth = $(".certification").width(),
        centerName = (picWidth / 2) - (nameWidth / 2) + 6,
        centerCourse = (picWidth / 2) - (courseWidth / 2) + 6;
    $(".attendeeName").css("left", centerName);
    $(".courseName").css("left", centerCourse);
}