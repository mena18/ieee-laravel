$("#sendMessage").on("click",function (e) {
    $("#errors").addClass("hidden");

    var url = $(this).data("url");
    console.log(url);

    var namePatt = new RegExp("^[a-zA-Z ]+$");

    var emailPatt = new RegExp("^[_A-Za-z0-9]+((.|-|_)[A-Za-z0-9]+)?@[A-Za-z0-9]+((.[A-Za-z]{2,})|(.[A-Za-z]{2,}.[A-Za-z]{2,}))$");

    var digitPatt = new RegExp("^[0-9]+$");

    var messagePatt = new RegExp("^[0-9a-zA-Z:,.' ]+$");


    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var message = $("#content").val();


    console.log(namePatt.test(name));
    console.log(emailPatt.test(email));
    console.log(digitPatt.test(mobile));
    console.log(messagePatt.test(message));

    if(!namePatt.test(name) || name === "" || name.length < 4) {
        $("#name").addClass("contactMessageError");
    } else {
        $("#name").removeClass("contactMessageError");
    }
    if(!digitPatt.test(mobile) || mobile === "" || mobile.length !== 11) {
        $("#mobile").addClass("contactMessageError");
    } else {
        $("#mobile").removeClass("contactMessageError");
    }
    if(!emailPatt.test(email) || email === "") {
        $("#email").addClass("contactMessageError");
    } else {
        $("#email").removeClass("contactMessageError");
    }
    if(!messagePatt.test(message) || message === "" || message.length < 5) {
        $("#content").addClass("contactMessageError");
    } else {
        $("#content").removeClass("contactMessageError");
    }

    console.log($(".contactMessageError").length)

    if($(".contactMessageError").length == 0) {
        $.ajax({
            url: url,
            type: "POST",
            data: {
                "_token": $('#token').val(),
                "name" : name,
                "email" : email,
                "mobile" : mobile,
                "message": message
            },
            success: function (data) {
                $("#name").val("");
                $("#email").val("");
                $("#mobile").val("");
                $("#content").val("");
                $("#errors").addClass("hidden");
                swal("Your Message Sent Successfully", "we are happy to receive your message, we will answer soon", "success");
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);
                $.each(errors.errors, function (key, value) {
                    $("#errors").removeClass("hidden");
                    $("#errors ul").append(`<li>${value[0]}</li>`);
                });
            },
        });
    }
    return false
});
