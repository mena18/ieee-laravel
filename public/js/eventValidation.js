$(document).ready(function () {
    'use strict';
    var nameUniversityPatt = new RegExp("[^a-zA-Z ]");

    // var emailPatt = new RegExp("^[_A-Za-z0-9]+((.|-|_)[A-Za-z0-9]+)?@[A-Za-z0-9]+((.[A-Za-z]{2,})|(.[A-Za-z]{2,}.[A-Za-z]{2,}))$");

    var digitPatt = new RegExp("[^0-9]");

    // var facebookPatt = new RegExp("http(?:s):\\/\\/(?:www\\.)facebook\\.com\\/.+");

    $("#eventReg").on('click', function(event) {
        var name = $("#name").val();
        var faculty = $("#Faculty").val();
        var semester = $("#Semester").val();
        var email = $("#email").val();
        var mobile = $("#Mobile").val();

        var name_error = $('#name-error') 
        var faculty_error = $('#Faculty-error') 
        var semester_error = $('#semester-error') 
        var email_error = $('#email-error') 
        var mobile_error = $('#Mobile-error') 
        // var facebook = $("#facebook").val();
        // var fbCheck = facebook.substring(0, 8);
        // if(fbCheck !== "https://") {
        //     facebook = "https://" + facebook;
        //     $("#facebook").val(facebook);
        // }
        if(nameUniversityPatt.test(name)) {
            $("#name").addClass("error");
            event.preventDefault();
            name_error.text('name contains characters  and spaces only ')
        }else if(name === "" || name.length < 4){
            $("#name").addClass("error");
            event.preventDefault();
            name_error.text('write your full name (first name and last name)')
        } else {
            $("#name").removeClass("error");
            name_error.text('')
        }
        if(email.indexOf('@pua.edu.eg')==-1 || email === "") {
            $("#email").addClass("error");
            event.preventDefault();
            email_error.text('Write your pua email (mail@pua.edu.eg)')
            
        } else {
            $("#email").removeClass("error");
            email_error.text('')
        }
        if(digitPatt.test(mobile) || mobile === "" || mobile.length !== 11) {
            $("#Mobile").addClass("error");
            event.preventDefault();
            mobile_error.text('mobile phone must contains 11 digits')
        } else {
            $("#Mobile").removeClass("error");
            mobile_error.text('')
        }
        // if(!facebookPatt.test(facebook) || facebook === "") {
        //     $("#facebook").addClass("error");
        //     event.preventDefault();
        // } else {
        //     $("#facebook").removeClass("error");
        // }
        if(faculty === "" || faculty.length < 3) {
            $("#Faculty").addClass("error");
            event.preventDefault();
            faculty_error.text('faculty must be greater than 2 character')
        } else {
            $("#Faculty").removeClass("error");
            faculty_error.text('')
        }
        if(digitPatt.test(semester) || semester === "" || semester.length > 2) {
            $("#Semester").addClass("error");
            event.preventDefault();
            semester_error.text('semester must be number')
        } else {
            $("#Semester").removeClass("error");
            semester_error.text('')
        }

        if ($(".error").length > 0) {
            event.preventDefault();
        } else {
            $(this).unbind('#eventForm').submit()
        }
    });
});
