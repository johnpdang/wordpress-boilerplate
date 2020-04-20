$(document).ready(() => {
    const globalSliderSettings = {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        fade: true,
        dotsClass: 'custom_paging',
        customPaging: function(slider, i) {
            if (i === 0) {
                return `<span current-slide>1</span>/<span total-slides>${slider.slideCount}</span>`;
            }
        },
        rows: 0
    };

    const $dom = {}
    const cacheDom = () => {
        $dom.infoSlider = $('.info-slider');
        $dom.infoSlider__rect = $('.info-slider__rect');
        $dom.infoSlider__square = $('.info-slider__square');
        $dom.featuredSlider = $('.featured-slider');
        $dom.secondFeaturedSlider = $('.second-featured-slider');
        $dom.largeColumnSlider = $('.large__column-slider');
    }

    const initSliders = () => {
        for (let val of Object.values($dom)) {
            val.slick(globalSliderSettings)
                .on('afterChange', function(event, slick, currentSlide) {
                    $(event.currentTarget).find('[current-slide]').text(currentSlide + 1);
                })

            // Set the slides to same height on init
            $(val).on('setPosition', function() {
                resizeSlider(val);
            });
        }

    }



    //we need to maintain a set height when a resize event occurs.
    //Some events will through a resize trigger: $(window).trigger('resize');
    $(window).on('resize', function(e) {
        for (let val of Object.values($dom)) {
            resizeSlider(val);
        }
    });

    //since multiple events can trigger a slider adjustment, we will control that adjustment here
    function resizeSlider(wrapper) {
        let $slickSlider = $(wrapper);
        $slickSlider.find('.slick-slide').height('auto');

        const slickTrack = $slickSlider.find('.slick-track');
        const slickTrackHeight = $(slickTrack).height();

        $slickSlider.find('.slick-slide').css('height', slickTrackHeight + 'px');
    }

    cacheDom();
    initSliders();

})