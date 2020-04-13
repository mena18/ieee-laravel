var previous = null;
$('.board-17 img, .counselor img').on('mouseenter', function (e) {
    "use strict";
    if (window.innerWidth > 991) {
        if (!e.target.hasAttribute('data-target')) {
            var t = $(e.target.parentElement),
                i;
            $('.board-17').each(function () {
                if (this === t[0]) {
                    i = $(this).index()
                }
            });
            changeImages('.sided', i)
        } else {
            changeImages('.top')
        }
    }
});
$('.board-17 img, .counselor img').on('mouseleave', resetImages);

function resetImages() {
    "use strict";
    var other = (previous == '.sided') ? '.top' : '.sided';
    $('.board-17 ' + previous).each(function() {
        $(this).addClass('hidden').siblings('img').not(previous).not(other).removeClass('hidden')
    });
    $('.board-17 .rightSide, .board-17 .leftSide').each(function() {
        ($(this).hasClass('rightSide')) ? $(this).removeClass('rightSide'): $(this).removeClass('leftSide')
    })
}

function changeImages(next, cur = null) {
    if (cur !== null) {
        var exclude = $('.board-17').filter($('.board-17').eq(cur))[0]
    }
    $('.board-17').not($(exclude)).children('img').not('.hidden').addClass('hidden').siblings(next).removeClass('hidden');
    previous = next;
    if (cur) {
        $('.board-17').each(function() {
            $(this).index() < cur ? $('img', $(this)).not('.hidden').addClass('rightSide') : $('img', $(this)).not('.hidden').addClass('leftSide')
        })
    }
}
$('.about-count').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now))
        }
    })
})