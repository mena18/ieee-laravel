$(".certificate").mouseenter(function() {
    "use strict";
    $(":submit").css("background-color", "#004296")
});
$(".certificate").mouseleave(function() {
    "use strict";
    $(":submit").css("background-color", "#F58C04")
});
$("form").submit(function(e) {
    "use strict";
    e.preventDefault();
    var str = $("#serial").val(),
        patt = new RegExp(/^[a-z]\d{3}-\d{3}$/gi),
        res = patt.test(str);
    if (!res || str === '') {
        if($('body').width() < 480){
            $('.offlineCourses').css('margin-top','60px');;
        }
        $(".warning").removeClass('hide')
    } else {
        $(".warning").addClass('hide');
        if ($("body").width() > 480) {
            $('.offlineCourses').css('margin-top','0');
            window.open("courses/certificate/" + str, "_blank", "width=1024,height=778,scrollbars=no,resizable=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no", "false")
        } else if ($("body").width() < 480) {
            window.open("courses/certificate/" + str, "_blank", "width=413,height=320,scrollbars=no,resizable=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no", "false")
        }
    }
})
