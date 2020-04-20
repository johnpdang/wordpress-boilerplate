$(document).ready(() => {
  const handleFades = (slide = 0) => {
    let logoArr = Array.from($(`[data-slick-index="${slide}"] .sponsor`));
    let logoIndex = 0;
    
    $(`[data-slick-index="${slide}"] .divider`).addClass('faded-in');

    const fader = setInterval(() => {
      $(logoArr[logoIndex]).addClass('faded-in');

      if (logoArr.length <= logoIndex) {
        clearInterval(fader)
      }

      logoIndex++;
    }, 500)
  }

  $('[js-sponsor-slider]').on('init', (event, slick) => {
    handleFades();
  });


  $('[js-sponsor-slider]').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5500,
    fade: true,
    speed: 1250,
    cssEase: 'linear',
    rows: 0
  }).on('beforeChange', (event, slick, currentSlide, nextSlide) => {
    handleFades(nextSlide);
  }).on('afterChange', (event, slick, currentSlide) => {
    let slideIndex = currentSlide === 0 ? slick.slideCount - 1 : currentSlide - 1;
    $(`[data-slick-index="${slideIndex}"] .faded-in`).removeClass('faded-in');
  });
})