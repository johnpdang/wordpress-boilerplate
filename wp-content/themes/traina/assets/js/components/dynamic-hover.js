$(document).ready(() => {

    $('.hover-item[data-target]').on('mouseenter', (e) => {
        const hoverItem = $(e.currentTarget);
        const target = hoverItem.data('target');

        if (!hoverItem.hasClass('active')) {
            let stringWidth = Math.ceil(Math.abs(hoverItem.innerWidth() - $('[hover-links]').innerWidth())) + 50

            $('.hover-item').removeClass('active');
            $('.draw-line').css({
                'width': 0,
                'left': 0
            })
            hoverItem.addClass('active');

            hoverItem.find('.draw-line').css({
                'width': stringWidth + 'px',
                'left': Math.ceil(Math.abs(hoverItem.innerWidth())) + 'px'
            });
        }

        if (!$(`#${target}`).hasClass('active')) {
            $('.hover-content__wrapper').removeClass('active').addClass('hidden');
            $(`#${target}`).removeClass('hidden').addClass('active');
        }

    });

})