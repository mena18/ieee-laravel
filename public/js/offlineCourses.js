document.body.onload = function () {
    $(".loading").fadeOut(1000);
    $("body").css("overflow","auto");
    var accordWithPage =  function() {

        var faqDiv = $('#faq-links div');


        $(function () {

            faqDiv.on("click", function() {
                $(this).removeClass("btn btn-warning");
                $(this).addClass('btn btn-primary btn-lg');
                $(this).siblings().removeClass("btn btn-primary btn-lg");
                $(this).siblings().addClass("btn btn-warning");
                var hideSec = 'faq-hide';
                var $this = $(this),
                    $id = $this.attr('id'),
                    $class = '.' + $('.about-' + $id).attr('class').replace(hideSec, '');

                $('#faq-wrapper').addClass(hideSec);
                $('.about-' + $id).removeClass(hideSec);
                $('div[class*=about]').not($class).addClass(hideSec);

            });

        });

        $(function () {

            var select = 'faq-selected';

            faqDiv.click(function () {

                if ($(this).hasClass(select)) {
                    $(this).removeClass(select);
                } else {
                    $('#faq-links .faq-selected').removeClass(select);
                    $(this).addClass(select);
                }
            }); //faq link selected
        });



//Accordion

        $(function () {

            var expand = 'expanded';
            var content = $('.faq-content');
            //FAQ Accordion
            $('.faq-accordion > li > a').click(function (e) {
                e.preventDefault();
                if ($(this).hasClass(expand)) {
                    $(this).removeClass(expand);
//          $('.faq-accordion > li > a > div').not(this).css('opacity', '1');//returns li back to normal state
                    $(this).parent().children('ul').stop(true, true).slideUp();
                } else {
//            $('.faq-accordion > li > a > div').not(this).css('opacity', '0.5');//dims inactive li
                    $('.faq-accordion > li > a.expanded').removeClass(expand);
                    $(this).addClass(expand);
                    content.filter(":visible").slideUp();
                    $(this).parent().children('ul').stop(true, true).slideDown();
                }
            }); //accordion function

            content.hide();

        });

    };

    accordWithPage();
};