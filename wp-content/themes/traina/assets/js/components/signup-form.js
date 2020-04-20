$(document).ready(() => {
    $('.skip-to-content').on('click', event => {
        event.preventDefault();
        let id = $(event.currentTarget).attr('href');
        $('html,body').animate({ scrollTop: $(id).offset().top }, 400);
    });

    $(document).bind('gform_post_render', function(){
        if($("div.validation_error").length != 0){
            $('.gform_body').css({
                'width':'556px',
                'height':'100%'
            });
            $('input#gform_submit_button_1').addClass('active')
        }
    });
    
    $('[js-signup-anchor]').on('click', event => {
        let signupTarget = $('[js-trigger-signup]');
        $('html,body').animate({ 
            scrollTop: $(signupTarget).offset().top 
        }, {
            duration: 600,
            complete: () => {
                $('[js-trigger-signup]').trigger('click');
            }
        })
    });

    $('[js-trigger-signup]').on('click', event => {
        $(event.currentTarget).addClass('hidden');
        let currForm = $(event.currentTarget).siblings('.dtd-form_wrapper');
        $(currForm).find('input#gform_submit_button_1').addClass('active');
        $(currForm).find('.gform_body').css('height', '50px');

        if ($(window).innerWidth() < 780) {
            $(currForm).find('.gform_body').animate({
                width: '285px',
            }, 500)
        } else {
            $(currForm).find('.gform_body').animate({
                width: '556px',
            }, 500)
        }
        $(currForm).find('input[type="text"]').focus();
    });

})
