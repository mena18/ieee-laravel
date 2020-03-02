$(document).ready(function () {
    'use strict';
    var nameUniversityPatt = new RegExp("[^a-zA-Z ]");

    var emailPatt = new RegExp("^[_A-Za-z0-9]+((.|-|_)[A-Za-z0-9]+)?@[A-Za-z0-9]+((.[A-Za-z]{2,})|(.[A-Za-z]{2,}.[A-Za-z]{2,}))$");

    var digitPatt = new RegExp("[^0-9]");


    $("#membershipS").on('change' , function () {
        if($(this).val() == 'Member') {
            $('.membershipid').removeClass('hide');
        } else {
            $('.membershipid').addClass('hide');
        }
    });

    $("#megaFormSubmit").on('click', function(event) {
        var name = $(".name").val();
        var email = $(".email").val();
        var mobile = $(".mobile").val();
        var nationalid = $(".nationalid").val();
        var university = $(".university").val();
        var membership = $(".membership").val();
        var a_status = $(".a_status").val();
        var ieeemember = $(".ieeemember").val();
        var education = $(".education").val();

        if(nameUniversityPatt.test(name) || name === "" || name.length < 4) {
            $(".name").addClass("error");
            event.preventDefault();
        } else {
            $(".name").removeClass("error");
        }
        if(emailPatt.test(email) && email !== "") {
            $(".email").removeClass("error");
        } else {
            $(".email").addClass("error");
            event.preventDefault();
        }
        if(digitPatt.test(mobile) || mobile === "" || mobile.length !== 11) {
            $(".mobile").addClass("error");
            event.preventDefault();
        } else {
            $(".mobile").removeClass("error");
        }
        if (digitPatt.test(nationalid) || nationalid === "" || nationalid.length !== 14) {
            $(".nationalid").addClass("error");
            event.preventDefault();
        } else {
            $(".nationalid").removeClass("error");
        }
        if (nameUniversityPatt.test(university) || university === "" || university.length < 3) {
            $(".university").addClass("error");
            event.preventDefault();
        } else {
            $(".university").removeClass("error");
        }
        if (a_status === null) {
            $(".a_status").addClass("error");
            event.preventDefault();
        } else {
            $(".a_status").removeClass("error");
        }
        if (ieeemember === null) {
            $(".ieeemember").addClass("error");
            event.preventDefault();
        } else {
            $(".ieeemember").removeClass("error");
            if (ieeemember === "Member") {
                if (digitPatt.test(membership) || membership === "") {
                    $(".membership").addClass("error");
                    event.preventDefault();
                } else {
                    $(".membership").removeClass("error");
                }
            }
        }
        if (education === null) {
            $(".education").addClass("error");
            event.preventDefault();
        } else {
            $(".education").removeClass("error");
        }
        if ($(".error").length > 0) {
            event.preventDefault();
        } else {
            $(this).unbind('megaReg').submit()
        }
    });
});
