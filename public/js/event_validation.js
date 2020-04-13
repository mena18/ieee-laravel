var EventForm = $('#event-form');
EventForm.on('submit', function(e) {
    formValidation(e, e.target)
});

function formValidation(e, F) {
    var errorInputs = validateInputs(F.id),
        errorDate = isValidDate(F.id),
        errorSelect = checkSelect(F.id),
        errorImages = checkImages(F.id);
    if (!errorDate) {
        $('#' + F.id + ' input[name="date"]').addClass('error')
    } else {
        $('#' + F.id + ' input[name="date"]').removeClass('error')
    }
    console.log(errorInputs);
    if (errorInputs || !errorDate || errorSelect || errorImages) {
        console.log('error');
        e.preventDefault()
    } else {}
}

function checkImages(Form) {
    var error = !1;
    if (document.getElementById(Form)['event_image'].files.length === 0) {
        error = !0;
        console.log('image Error')
    } else {
        console.log('image no error')
    }
    return error
}

function isValidDate(Form) {
    var dateString = $('#' + Form + ' input[name="date"]').val();
    if (!(/^\d{1,2}\/\d{1,2}\/\d{4}$/).test(dateString)) {
        return !1
    }
    var parts = dateString.split("/");
    var day = parseInt(parts[1], 10);
    var month = parseInt(parts[0], 10);
    var year = parseInt(parts[2], 10);
    if (year < 1000 || year > 3000 || month == 0 || month > 12) {
        return !1
    }
    var monthLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    if (year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
        monthLength[1] = 29;
    return day > 0 && day <= monthLength[month - 1]
};

function validateInputs(Form) {
    var error = !1;
    $('input[type="text"]:not([name="date"]), textarea', $('#' + Form)).each(function() {
        var input = $(this),
            regEx = input.data('check'),
            v = input.val();
        if (v === '' || v.match(regEx)) {
            console.log(input);
            console.log(v.match(regEx));
            input.addClass('error');
            error = !0
        } else {
            input.removeClass('error')
        }
    });
    console.log($('input[type="text"]:not([name="date"]), textarea', $('#' + Form)));
    return error
}

function checkSelect(Form) {
    var selectBox = $('#' + Form + '  select');
    if (selectBox.val() === '') {
        selectBox.addClass('error');
        return !0
    } else {
        selectBox.removeClass('error');
        return !1
    }
}
var addSpeaker = $('#addSpeaker');

addSpeaker.on('click', function() {
    var speakers = $('.speakers');
    speakers.each(function(s) {
        speakers.eq(s).children('input:last-of-type').after(speakers.eq(s).children('input:first-of-type').clone().val(''));
    });
})


var validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];

function ValidateSingleInput(fileInput) {
    if (fileInput.type == "file") {
        var sFileName = fileInput.value;
        if (sFileName.length > 0) {
            var blnValid = !1;
            for (var j = 0; j < validFileExtensions.length; j++) {
                var sCurExtension = validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = !0;
                    break
                }
            }
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + validFileExtensions.join(", "));
                fileInput.value = "";
                return !1
            }
        }
    }
    return !0
}