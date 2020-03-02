$(document).ready(function () {
    'use strict';
    var nameUniversityPatt = new RegExp("[^a-zA-Z ]");

    var emailPatt = new RegExp("^[_A-Za-z0-9]+((.|-|_)[A-Za-z0-9]+)?@[A-Za-z0-9]+((.[A-Za-z]{2,})|(.[A-Za-z]{2,}.[A-Za-z]{2,}))$");

    var digitPatt = new RegExp("[^0-9]");

    var facebookPatt = new RegExp("http(?:s):\\/\\/(?:www\\.)facebook\\.com\\/.+");

    $("#eventReg").on('click', function(event) {
        var name = $("#name").val();
        var faculty = $("#Faculty").val();
        var semester = $("#Semester").val();
        var email = $("#email").val();
        var mobile = $("#Mobile").val();
        var facebook = $("#facebook").val();
        var fbCheck = facebook.substring(0, 8);
        if(fbCheck !== "https://") {
            facebook = "https://" + facebook;
            $("#facebook").val(facebook);
        }
        if(nameUniversityPatt.test(name) || name === "" || name.length < 4) {
            $("#name").addClass("error");
            event.preventDefault();
        } else {
            $("#name").removeClass("error");
        }
        if(emailPatt.test(email) && email !== "") {
            $("#email").removeClass("error");
        } else {
            $("#email").addClass("error");
            event.preventDefault();
        }
        if(digitPatt.test(mobile) || mobile === "" || mobile.length !== 11) {
            $("#Mobile").addClass("error");
            event.preventDefault();
        } else {
            $("#Mobile").removeClass("error");
        }
        if(!facebookPatt.test(facebook) || facebook === "") {
            $("#facebook").addClass("error");
            event.preventDefault();
        } else {
            $("#facebook").removeClass("error");
        }
        if(nameUniversityPatt.test(faculty) || faculty === "" || faculty.length < 4) {
            $("#Faculty").addClass("error");
            event.preventDefault();
        } else {
            $("#Faculty").removeClass("error");
        }
        if(digitPatt.test(semester) || semester === "" || semester.length > 2) {
            $("#Semester").addClass("error");
            event.preventDefault();
        } else {
            $("#Semester").removeClass("error");
        }

        if ($(".error").length > 0) {
            event.preventDefault();
        } else {
            $(this).unbind('#eventForm').submit()
        }
    });
});
