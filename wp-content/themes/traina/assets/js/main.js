import "babel-polyfill";
// import slider from './components/slider';
import signup from './components/signup-form';
import animation from './components/animation';
import navigation from './components/navigation';
import slider from './components/masonry-slider';
import dynamicHover from './components/dynamic-hover';
import modal from './components/modal';

$(document).ready(() => {
    $('.popup_div__link').on('click', function(e) {
        if ($(this).hasClass('active')) {
            e.preventDefault();
        } else {
            $('.popup_div__link').removeClass('active');
            $('.popup_div').removeClass('active');
            $(this).addClass('active');
            let targetDiv = $(this).attr('data-rel');
            $(targetDiv).addClass('active');
            console.log(targetDiv);
            e.preventDefault();
        }
    });

    $('[data-target]').on('click keypress', e => {
        let target = $(e.currentTarget).data('target');
    
        if(!$(e.currentTarget).hasClass('active')){
            $('.tab__list button').removeClass('active');
            $(e.currentTarget).addClass('active')
        }
        $('.tab__display').addClass('hidden').removeClass('active');
        $(`#${target}`).addClass('active').removeClass('hidden')
    });
})